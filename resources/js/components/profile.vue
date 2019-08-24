<style>
    .widget-user .widget-user-header {
        padding: 1rem;
        height: 240px;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
    }


</style>




<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 col-sm-10 mt-4">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header text-white" style="background-image: url('img/coverr.jpg');">
                        <h3 class="widget-user-username">{{ this.form.name }}</h3>
                        <h5 class="widget-user-desc">{{ this.form.role }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" v-bind:src="'img/'+form.photo" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>

<!--            profile description start-->


            <div class="col-md-10">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active show" href="#activity" data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="activity">

                                <!-- Post -->
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="" alt="User Image">
                                        <span class="username">
                                          <a href="#">Sarah Ross</a>
                                          <a href="#" class="float-right btn-tool"><i class="fa fa-times"></i></a>
                                        </span>
                                        <span class="description">Sent you a message - 3 days ago</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" placeholder="Response">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-danger">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.post -->

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                            <span class="bg-danger">
                                              10 Feb. 2014
                                            </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-envelope bg-primary"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-user bg-info"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                            </h3>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-comments bg-warning"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                            <span class="bg-success">
                                              3 Jan. 2014
                                            </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal" @submit.prevent="imageUpdate" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" v-model="form.name" class="form-control" id="name" placeholder="Name"
                                                   :class="{ 'is-invalid': form.errors.has('name') }">
                                            <has-error :form="form" field="name"></has-error>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" v-model="form.email" class="form-control" id="email" placeholder="Email"
                                                   :class="{ 'is-invalid': form.errors.has('email') }">
                                            <has-error :form="form" field="email"></has-error>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">Bio</label>

                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="bio" v-model="form.bio"  placeholder="Bio"
                                                      :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                            <has-error :form="form" field="bio"></has-error>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Image</label>

                                        <div class="col-sm-10">
                                            <input type="file" id="image" class="form-control" @change="imageUrl"
                                                   :class="{ 'is-invalid': form.errors.has('image') }">
                                            <has-error :form="form" field="image"></has-error>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Role</label>
                                        <div class="col-md-10">
                                            <select name="role" v-model="form.role" id="role" class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
                                                <option value="">Select User Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="user">Standard User</option>
                                                <option value="author">Author</option>
                                            </select>
                                        </div>
                                        <has-error :form="form" field="role"></has-error>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>


<!--            profile description end-->





        </div>
    </div>
</template>

<script>
    import Form from 'vform'
    export default {
        data() {
            return {
                form: new Form({
                    id: '',
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    bio: '',
                    image: '',
                    photo:'',
                    role: ''
                })
            }
        },
        methods: {


            imageUrl(e) {
                let file = e.target.files[0];
                console.log(file);
                let reader = new FileReader();

                reader.onload = (file) => {
                    this.form.image = file.target.result;
                    console.log(this.form.image)
                    // rebuild cropperjs with the updated source
                    // this.$refs.cropper.replace(event.target.result)
                };
                reader.readAsDataURL(file)


            },
            imageUpdate() {

                this.$Progress.start();
                this.form.put('api/profile', [this.form.data]).then(() => {
                    Fire.$emit('userOperation');
                    Toast.fire({
                        type: 'success',
                        title: 'User Updated Successfully done',

                    }).catch(() => {
                        this.$Progress.fail();
                    });
                });
                this.$Progress.finish();


            }
        },


            created() {

                this.form.get('api/profile').then(({data}) => {
                    this.form.fill(data)
                });

                this.$Progress.start();
                Fire.$on('userOperation', () => {
                    this.form.get('api/profile').then(({ data }) => {
                        this.form.fill(data)
                    });
                    this.$Progress.finish();
                });

            },

            mounted() {
                console.log('Component mounted.')
            },
        }

</script>
