<script>
  import { createEventDispatcher } from 'svelte';
  import SearchInput from './SearchInput.svelte';

  export let items = [];

  let search = '';
  let selectedIds = new Set();

  const dispatch = createEventDispatcher();

  function toggleSelect(id) {
    selectedIds.has(id) ? selectedIds.delete(id) : selectedIds.add(id);
  }

  function addToForm() {
    const selectedItems = items.filter(item => selectedIds.has(item.id));
    dispatch('addItems', selectedItems);
    selectedIds.clear();
  }

  $: filteredItems = items.filter(item =>
    item.name.toLowerCase().includes(search.toLowerCase())
  );
</script>

<div class="modal">
  <h2>Pilih Barang</h2>
  <SearchInput bind:value={search} />

  <ul>
    {#each filteredItems as item}
      <li>
        <label>
          <input
            type="checkbox"
            checked={selectedIds.has(item.id)}
            on:change={() => toggleSelect(item.id)}
          />
          {item.name}
        </label>
      </li>
    {/each}
  </ul>

  <button on:click={addToForm}>Tambahkan ke Form</button>
</div>

<style>
  .modal {
    border: 1px solid #ccc;
    padding: 1rem;
    margin-bottom: 2rem;
    background: #f9f9f9;
  }

  ul {
    list-style: none;
    padding: 0;
    max-height: 150px;
    overflow-y: auto;
    margin-bottom: 1rem;
  }

  li {
    margin-bottom: 0.5rem;
  }
</style>
