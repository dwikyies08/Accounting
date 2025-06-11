<script>
  let count = 0;

  function increment() {
    count += 1;
  }
</script>

<main>
  <h1>Counter: {count}</h1>
  <button on:click={increment}>Tambah</button>
</main>

<style>
  main {
    text-align: center;
    margin-top: 2rem;
  }

  button {
    padding: 0.5rem 1rem;
    font-size: 1rem;
  }
</style>
