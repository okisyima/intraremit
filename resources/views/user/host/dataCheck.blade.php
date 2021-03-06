@include('../layout/head')

@include('../layout/header')
  
@include('../layout/sidebar')

<!-- Content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Check
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Check</li>
      </ol>
    </section>

  {{-- content isi --}}
    <section class="content">

      <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="dataTables_length" id="example1_length">
                          <label>Show 
                              <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                            </select> entries
                          </label>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div id="example1_filter" class="dataTables_filter">
                          <label>Search:
                            <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <table id="example1" class="table table-bordered table-striped table-hover dataTable" role="grid" ria-describedby="example1_info">
                            <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Rendering engine</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Browser</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Platform(s)</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Engine version</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">CSS grade</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.7</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.5</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 2.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 3.0</td>
                                <td>Win 2k+ / OSX.3+</td>
                                <td>1.9</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Gecko</td>
                                <td>Camino 1.0</td>
                                <td>OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td>
                                <td>1.8</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                <td>1.7</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td>
                                <td>1.7</td>
                                <td>A</td>
                              </tr><tr role="row" class="odd">
                                <td class="sorting_1">Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td>1.8</td>
                                <td>A</td>
                              </tr><tr role="row" class="even">
                                <td class="sorting_1">Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1</td>
                                <td>A</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
          
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite"><br/>Showing 1 to 10 of 57 entries</div>
                      </div>
                      <div class="col-sm-">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                          <ul class="pagination">
                            <li class="paginate_button previous disabled" id="example1_previous">
                              <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                            </li>
                            <li class="paginate_button active">
                              <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                            </li>
                            <li class="paginate_button ">
                              <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                            </li>
                            <li class="paginate_button next" id="example1_next">
                              <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
            </div>
        </div>
      </div>

    </section>
    
  </div>
  
  @include('../layout/footer')