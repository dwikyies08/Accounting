<script>
  export let items = [];

  import ItemModal from '../components/Modal/ItemModal.svelte';
  import ItemTable from '../components/Table/ItemTable.svelte';

  let addedItems = [];

  function handleAddItems(e) {
    const selected = e.detail;
    const newItems = selected.filter(
      item => !addedItems.some(existing => existing.id === item.id)
    );
    addedItems = [...addedItems, ...newItems];
  }
</script>

<div>
  <ItemModal {items} on:addItems={handleAddItems} />
  <ItemTable items={addedItems} />
</div>