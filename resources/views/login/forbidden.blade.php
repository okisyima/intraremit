@include('../layout/head')

@include('../layout/header')
  
@include('../layout/sidebar')

<div class="content-wrapper" style="min-height: 1136px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        404 Error Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">404 error</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-warning"></i>
              <h3 class="box-title">Alerts</h3>
              <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Error optio, consequatur perferendis accusantium minima maiores rerum temporibus, cum id quas quasi repudiandae aut illo voluptatibus, sed asperiores voluptatem quibusdam amet!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  
  @include('../layout/footer')