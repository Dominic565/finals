<template>
    <h1>HouseInstallment</h1>
    <hr>
   <div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="Houseinstallments in houseinstallment" :key="Houseinstallments.id">
        <div class="card-header bg-info">
            <h4>{{Houseinstallments.Housename}}</h4>
        </div>
        <div class="card-body">
            <h6>{{Houseinstallments.Address}}</h6>
        </div>
        <div class="card-footer">
            <h6>Price:  {{Houseinstallments.price}}</h6>
        </div>
    </div>

   </div>
</template>
<script setup>
import Layout from '../Shared/Layout.vue'</script>
<script>
export default {
    layout: Layout,
    props: {
        houseinstallment: Array
    }
}</script>
<style scoped>
.card-header{
    display: flex;
}
.card {
    width: 375px;
}
.card-body{
    background-image: url('./img/Design1.jpeg');
    background-size: cover;
    height: 250px;
}
</style>