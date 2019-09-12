<template>
    <div id="todo-list-example" class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h1 class="text-center">Bookings List</h1>
       
          <table class="table">
            <tr v-for="(todo) in todos" v-bind:id="todo.id" v-bind:name="todo.name v-bind:email="todo.email
            v-bind:status="todo.status v-bind:car_type="todo.car_type v-bind:booking_reference="todo.booking_reference">
              <td class="text-left">asdasd1</td>
          
            </tr>
          </table>
        </div>
      </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
  data () {
    return {
      todos: [],
      id: '',
      name: '',
      email: '',
      status: '',
      car_type: '',
      booking_reference: '',
      isEdit: false
    }
  },
  mounted () {
    this.getTasks()
  },
  methods: {
    getTasks () {
      axios({ method: 'GET', url: '/api/show' }).then(
        result => {
          console.log(result.data)
          this.todos = result.data
        },
        error => {
          console.error(error)
        }
      )
    },
 
  }
}
</script>