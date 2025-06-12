<script>
  export let items = [];
</script>

<h3>Daftar Barang Ditambahkan</h3>

{#if items.length === 0}
  <p>Belum ada barang ditambahkan.</p>
{:else}
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Barang</th>
      </tr>
    </thead>
    <tbody>
      {#each items as item}
        <tr>
          <td>{item.id}</td>
          <td>{item.name}</td>
        </tr>
      {/each}
    </tbody>
  </table>
{/if}

<style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 0.5rem;
  }

  th {
    background-color: #f0f0f0;
  }
</style>
