<script>
  export let value = '';
</script>

<input
  type="text"
  placeholder="Cari barang..."
  bind:value
  class="search-input"
/>

<style>
  .search-input {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
  }
</style>
