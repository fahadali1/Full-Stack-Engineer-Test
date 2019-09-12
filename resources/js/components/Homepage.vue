<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            	<div class="card">
                    <div class="card-header">Bookins List</div>

                    <div class="card-body">
                <table class="table table-bordered">
                <thead>
                <tr>
 				<th>Id</th> <th>Name</th> <th>Email Address</th> <th>Car Type</th> <th>Booking Status</th> <th>Booking Reference</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="list in lists">
                <td>{{list.id}}</td>
                <td>{{list.name}}</td>
                <td>{{list.email}}</td>
                <td>{{list.car_type}}</td>
                <td>{{list.status}}</td>
                <td>{{list.booking_reference}}</td>
                </tr>
                </tbody>
                </table
                </div></div></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data(){
       return{
       lists:[],
       list:{
       id: 0,
       name: '',
       email: '',
       car_type: '',
       status: '',
       booking_reference: ''

       }
       }
       },
        mounted() {
            console.log('Component mounted.')
            this.getlist()
            setInterval(this.getlist(),5000)
        },
        methods:{
        getlist(){
        axios.get('/api/show').then(response=>{
        console.log(response)
        this.lists = response.data
        })


        }
        }
    }
</script>
