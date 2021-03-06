<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">List Siswa</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="m-b-30">
                                            <button data-toggle="modal" data-target="#accordion-modal" class="btn btn-primary waves-effect waves-light">Tambah <i class="fa fa-plus"></i></button>
                                        </div>
                                        <form class="form-horizontal" role="form" action="<?php echo base_url('listsiswa/prosestambah_listsiswa'); ?>" method="POST" enctype="multipart/form-data">
                                        <div id="accordion-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content p-0">
                                                    <div class="panel-group panel-group-joined" id="accordion-test"> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" class="collapsed">
                                                                        NIS Siswa
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseOne" class="panel-collapse collapse in"> 
                                                                <div class="panel-body">
                                                                	<input name="nis_siswa" type="text" class="form-control" id="inputEmail3" placeholder="Masukan nis siswa">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo">
                                                                        Nama Siswa
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseTwo" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<input name="nama_siswa" type="text" class="form-control" id="inputEmail3" placeholder="Masukan nama siswa">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
                                                                        Username
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseThree" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<input name="username_siswa" type="text" class="form-control" id="inputEmail3" placeholder="Masukan username siswa">
                                                                </div> 
                                                            </div> 
                                                        </div> 
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseFour" class="collapsed">
                                                                        Password
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseFour" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<input name="password_siswa" type="password" class="form-control" id="inputEmail3" placeholder="Masukan password siswa">
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseFive" class="collapsed">
                                                                        Kelas
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseFive" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<select name="kelas_siswa">
                                                                		<option value="1">1</option>
                                                                		<option value="2">2</option>
                                                                		<option value="3">3</option>
                                                                	</select>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseSix" class="collapsed">
                                                                        Jurusan
                                                                    </a> 
                                                                </h4> 
                                                            </div> 
                                                            <div id="collapseSix" class="panel-collapse collapse"> 
                                                                <div class="panel-body">
                                                                	<select name="jurusan_siswa">
                                                                		<option value="IPA">IPA</option>
                                                                		<option value="IPS">IPS</option>
                                                                	</select>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        <div class="panel panel-default"> 
                                                            <div class="panel-heading"> 
                                                                <h4 class="panel-title"> 
                                                                    <button class="btn btn-primary waves-effect waves-light m-b-5" class="collapsed">Tambah</button>
                                                                </h4> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        </form>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                        	<th>No</th>
                                                            <th>NIS</th>
                                                            <th>Nama</th>
                                                            <!-- <th>Username</th> -->
                                                            <th>Kelas</th>
                                                            <<th>Jurusan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $i = 1;
                                                    foreach ($lsi as $listsiswa) {
                                                    ?>
                                                        <tr>
                                                        	<td><?php echo $i; ?></td>
                                                            <td><?php echo $listsiswa->nis_siswa; ?></td>
                                                            <td><?php echo $listsiswa->nama_siswa; ?></td>
                                                            <!-- <td><?php // echo $listsiswa->username_siswa; ?></td> -->
                                                            <td><?php echo $listsiswa->kelas_siswa; ?></td>
                                                            <td><?php echo $listsiswa->jurusan_siswa; ?></td>
                                                            <td class="actions">
                                                                <a href="<?php echo base_url().'listsiswa/edit_listsiswa/'.$listsiswa->id_listsiswa; ?>"><i class="fa fa-pencil"></i></a>
                                                                <a onclick="return confirm('Yakin mau hapus ?');" href="<?php echo base_url().'listsiswa/hapus_listsiswa/'.$listsiswa->id_listsiswa; ?>"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    $i++;
                                                	}
                                                    ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © SMAN 4 Cimahi.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->