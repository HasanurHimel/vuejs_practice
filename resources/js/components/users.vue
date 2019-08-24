<template>
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Management</h3>

                        <div class="card-tools">

                            <div><a href="#" @click="createModal" class="btn btn-success">Add new <i class="fas fa-user-plus"></i></a></div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>Sl no:</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Bio</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>


                            <div hidden>
                                {{ $i=1 }}
                            </div>
                            <tr v-for="user in users.data">
                                <td>{{ $i++ }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.bio }}</td>
                                <td>{{ user.role }}</td>
<!--                                <td><span class="tag tag-success">Approved</span></td>-->
                                <td>
                                    <a class="btn btn-secondary" href="#" @click="editModal(user)"><i class="fas fa-user-edit"></i></a>
                                    <a class="btn btn-danger" href="#" @click="deleteUser(user.id)"><i class="fas fa-trash"></i></a>

                                </td>
                            </tr>

                            </tbody></table>
                    </div>
                    <div class="card-footer">
                        <pagination :data="users" @pagination-change-page="getResults"></pagination>
                    </div>

                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>



        </div>


       <div class="col-md-7 col-md-offset-4">
           <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" v-show="editMode">Update User Data</h5>
                           <h5 class="modal-title" v-show="!editMode">Create User</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">

                           <form @submit.prevent="editMode ? updateUser() : createUser() ">
                               <div class="modal-body">
                                   <div class="form-group">
                                       <input v-model="form.name" type="text" name="name"
                                              placeholder="Name"
                                              class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                       <has-error :form="form" field="name"></has-error>
                                   </div>

                                   <div class="form-group">
                                       <input v-model="form.email" type="email" name="email"
                                              placeholder="Email Address"
                                              class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                       <has-error :form="form" field="email"></has-error>
                                   </div>

                                   <div class="form-group">
                                       <input v-model="form.password" type="password" name="password" id="password"
                                              placeholder="Password"
                                              class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" autocomplete="new-password">
                                       <has-error :form="form" field="password"></has-error>
                                   </div>

                                   <div class="form-group">
                                       <input type="password" name="password_confirmation" id="password_confirmation"
                                              placeholder="Re-enter Password" class="form-control"
                                              v-model="form.password_confirmation"
                                              data-vv-as="Re-enter Password" :class="{ 'is-invalid': form.errors.has('password_confirmation') }">
                                       <has-error :form="form" field="password_confirmation"></has-error>
                                   </div>

                                   <div class="form-group">
                                  <textarea v-model="form.bio" name="bio" id="bio"
                                  placeholder="Short bio for user (Optional)"
                                  class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                       <has-error :form="form" field="bio"></has-error>
                                   </div>


                                   <div class="form-group">
                                       <select name="role" v-model="form.role" id="role" class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
                                           <option value="">Select User Role</option>
                                           <option value="admin">Admin</option>
                                           <option value="user">Standard User</option>
                                           <option value="author">Author</option>
                                       </select>
                                       <has-error :form="form" field="role"></has-error>
                                   </div>



                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                   <button type="submit" v-show="editMode" class="btn btn-success">Update</button>
                                   <button type="submit" v-show="!editMode" class="btn btn-primary">Create</button>
                               </div>

                           </form>

                       </div>
                   </div>
               </div>
           </div>
       </div>



    </div>
</template>

<script>
    import Form from 'vform'
    export default {

        data() {
            return {
                editMode: false,
                users :{},
                form: new Form({
                    id:'',
                    name : '',
                    email: '',
                    password: '',
                    password_confirmation:'',
                    bio: '',
                    role: ''

                })
            }
        },
        methods: {

            getResults(page = 1) {
                axios.get('api/user?page=' + page)
                    .then(response => {
                        this.users = response.data;
                    });
            },


            createModal(){
                this.editMode= false;
                this.form.reset();
                $('#userModal').modal('show');
            },
            editModal(user){

                this.editMode= true;
                $('#userModal').modal('show');
                this.form.fill(user);
            },

            updateUser() {
                this.form.put('api/user/'+this.form.id).then(()=> {
                    this.$Progress.start();
                    Fire.$emit('userOperation');
                    $('#userModal').modal('hide');
                    Swal.fire(
                        'Updated!',
                        'User has been Updated.',
                        'success'
                    )
                    this.$Progress.finish();
                });



            },


            deleteUser(id){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        this.form.delete('api/user/'+id).then(()=> {
                            Fire.$emit('userOperation');
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }).catch(()=>{
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                // footer: '<a href>Why do I have this issue?</a>'
                            })
                        });


                    }
                })
             },
            loadUsers(){
                axios.get('api/user').then(({ data }) => { this.users= data })

                    .then(({ data }) => { console.log(data) });

            },
          createUser(){
            this.$Progress.start();
              this.form.post('register').then(()=> {
                  Fire.$emit('userOperation');
                  $('#userModal').modal('hide');
                  Toast.fire({
                      type: 'success',
                      title: 'User Created Successfully done'
                  });

                  
              }).catch(()=> {
			  Toast.fire({
                      type: 'error',
                      title: 'Some error'
                  });
			  
			  });

				this.$Progress.finish();

          }
        },


        created() {
            Fire.$on('searching', () => {
                let query=this.$parent.search;
               axios.get('api/searching?q='+query).then(({ data }) => {
                  this.users=data;
               }).catch(()=> {
                   console.log('not working')
               });
            });

            this.loadUsers();
            Fire.$on('userOperation', () => {
                this.$Progress.start();
               this.loadUsers();
                this.$Progress.finish();
            });
        }
    }
</script>
