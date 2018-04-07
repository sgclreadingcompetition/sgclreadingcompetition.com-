<template>
  <div class="drawer">
    <section>
      <div class="holder">
        <h3 class="header">初赛作答</h3>
        <p class="content">参赛者/小组可以在初赛期间（2018年3月1日至3月15日）<router-link to="/Question">登入作答</router-link>。</p>
      </div>
    </section>
  </div>

</template>

<script>

</script>

<style scoped>
  .drawer{
    padding-bottom: 20px;
  }
  .holder {
    text-align: left;
    border: 2px solid #5E5E5E;
    border-radius: 6px;
    padding-left: 25px;
    -webkit-box-shadow: 2px 3px 8px 0px #7C7C7C;
    box-shadow: 2px 3px 8px 0px #7C7C7C;
    background-color: #333333;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
    text-shadow: 0px 0px 0px;
    margin-left: 2%;
    margin-right: 2%;
    margin-top: 30px;
    margin-bottom: 10px;
    padding-top: 10px;
    height: 100%;
  }
  .header {
    text-shadow: 0px 0px 0 #000000;
    font-size: x-large;
    color: #B3B3B3;
    padding-bottom: 3px;
  }
  .content {
    color: #F6F6F6;
  }
</style>
