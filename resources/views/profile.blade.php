@extends('layouts.app')
@section('pageTitle')
Անձնական Տվյալներ
@endsection
@section('content')
<div class="profile-wrapper">
    <div class="profile-section-main">
        <div class="tab-content profile-tabs-content">
            <div class="tab-pane active" id="profile-settings" role="tabpanel">
                <!-- /.edit-cover -->
                <div class="row">
                    <div class="col-xl-2 col-md-3">
                        <div class="d-flex flex-wrap align-content-start justify-content-between">
                            <div>
                                <a href="#">
                                    <img src="../assets/global/images/profile-avatar-2.jpg" alt="" class="img-thumbnail mb-3">
                                </a>
                            </div>
                            <div class="mt-5">
                            </div>
                        </div>
                        <!-- /.d-flex -->
                    </div>
                    <!-- /.col- -->
                    <div class="col-xl-10 col-md-9">
                        <form action="#">
                            <h5 class="my-4">{{ Auth::user()->information->name }} {{ Auth::user()->information->surname }}</h5>
                            <!-- /.row -->
                            <h5 class="my-4 profile-edit-section-heading"></h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__email">Ծննդյան օր:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->birthday }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__website">էլ․ Հասցե:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->email }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__phone">Երկիր:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->city }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__skype">Քաղաք:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->state }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__phone">Վարչական շրջանի, Թաղամաս:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->address }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__skype">Հեռախոսահամար:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->mphone }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                            </div>
                            <!-- /.row -->
                            <h5 class="my-4 profile-edit-section-heading">Ընդհանուր տեղեկատվություն</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__job">Ֆակուլտետ:</label>
                                        <p class="text-muted mb-0">{{ Auth::user()->information->faculty }}</p>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__position"></label>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__major"></label>
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__school"></label>
                                    </div>
                                </div>
                                <!-- /.col- -->
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                    <!-- /.col- -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#profile-settings -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.profile-section-main -->
</div>
<!-- /.profile-wrapper -->
<div class="modal fade video-modal" id="video-modal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <iframe src="about:blank" width="760" height="440" allowfullscreen="">
            </iframe>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- plugins for the current page -->
<script src="{{ asset('assets/vendor/bower_components/lightbox2/dist/js/lightbox.min.js') }}">
</script>
@endsection
@section('css')
<!-- plugins for the current page -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bower_components/lightbox2/dist/css/lightbox.min.css') }}">
<!-- current page styles -->
<link rel="stylesheet" href="{{ asset('assets/examples/css/pages/profile.css') }}">
@endsection
