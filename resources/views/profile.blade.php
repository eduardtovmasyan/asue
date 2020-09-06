@extends('layouts.app')
@section('content')
<div class="profile-wrapper">
    <div class="profile-section-user">
        <div class="profile-cover-img">
            <img src="../assets/global/images/profile-cover-1.jpg" alt="">
        </div>
        <div class="profile-info-brief p-3">
            <img class="img-fluid user-profile-avatar" src="../assets/global/images/profile-avatar-2.jpg" alt="">
            <div class="text-center">
                <h5 class="text-uppercase mb-4">{{ Auth::user()->information->name }} {{ Auth::user()->information->surname }}</h5>
                <p class="text-muted fz-base"></p>
            </div>
        </div>
        <!-- /.d-flex -->
        <div class="hidden-sm-down">
            <hr class="m-0">
            <div class="profile-info-contact p-4">
                <h6 class="mb-3">Contact Information</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <strong>URL:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">Rathemes.com/inde.html</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>EMAIL:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">{{ Auth::user()->information->email }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>PHONE:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">{{ Auth::user()->information->cphone }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>SKYPE:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">Rathemes</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.profile-info-contact -->
            <hr class="m-0">
            <div class="profile-info-general p-4">
                <h6 class="mb-3">General Information</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <strong>JOB:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">Web Developer</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>POSITION:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">Team Manager</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>STUDIED:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">Computer Science</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>LAST SEEN:</strong>
                            </td>
                            <td>
                                <p class="text-muted mb-0">Yesterday 8:00 AM</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.profile-user-gallery -->
        </div>
        <!-- /.hidden-sm-down -->
    </div>
    <!-- /.profile-section-user -->
    <div class="profile-section-main">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs profile-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile-overview" role="tab">Timeline</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile-settings" role="tab">Settings</a>
            </li>
        </ul>
        <!-- /.nav-tabs -->
        <!-- Tab panes -->
        <div class="tab-content profile-tabs-content">
            <div class="tab-pane active" id="profile-overview" role="tabpanel">
                <div class="post-editor">
                    <textarea name="post-field" id="post-field" class="post-field" placeholder="Write Something Cool!">
                    </textarea>
                    <div class="d-flex">
                        <div class="mr-auto">
                            <button class="btn btn-sm btn-light mr-1">
                            <i class="fa fa-camera">
                            </i>
                            </button> <button class="btn btn-sm btn-light mr-1">
                            <i class="fa fa-link">
                            </i>
                            </button> <button class="btn btn-sm btn-light mr-1">
                            <i class="fa fa-film">
                            </i>
                            </button> <button class="btn btn-sm btn-light mr-1">
                            <i class="fa fa-code">
                            </i>
                            </button>
                        </div>
                        <button class="btn btn-success px-4 py-1">Post</button>
                    </div>
                </div>
                <!-- /.post-editor -->
                <div class="stream-posts">
                    <div class="stream-post">
                        <div class="sp-author">
                            <a href="#" class="sp-author-avatar">
                                <img src="../assets/global/images/101.jpg" alt="">
                            </a>
                            <h6 class="sp-author-name">
                            <a href="#">John Doe</a>
                            </h6>
                        </div>
                        <div class="sp-content">
                            <div class="sp-info">posted 1h ago</div>
                            <p class="sp-paragraph mb-0">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                        </div>
                        <!-- /.sp-content -->
                    </div>
                    <!-- /.stream-post -->
                    <div class="stream-post">
                        <div class="sp-author">
                            <a href="#" class="sp-author-avatar">
                                <img src="../assets/global/images/102.jpg" alt="">
                            </a>
                            <h6 class="sp-author-name">
                            <a href="#">Palmira Guthridge</a>
                            </h6>
                        </div>
                        <div class="sp-content">
                            <div class="sp-info">shared 14 minutes ago</div>
                            <div class="sp-video">
                                <div class="poster">
                                    <img class="poster-bg" src="../assets/global/images/profile-post-video-1.jpg" alt=""> <a href="#" class="poster-overlay" data-toggle="video-modal" data-src="https://player.vimeo.com/video/160856876" data-target="#video-modal">
                                        <div class="avatar avatar-circle p-3 avatar-lg bg-white">
                                            <svg class="svg-video-play-icon">
                                                <use xlink:href="../assets/global/svg-sprite/sprite.svg#video-play">
                                                </use>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <!-- /.poster -->
                            </div>
                        </div>
                        <!-- /.sp-content -->
                    </div>
                    <!-- /.stream-post -->
                    <div class="stream-post">
                        <div class="sp-author">
                            <a href="#" class="sp-author-avatar">
                                <img src="../assets/global/images/103.jpg" alt="">
                            </a>
                            <h6 class="sp-author-name">
                            <a href="#">Meghann Fraser</a>
                            </h6>
                        </div>
                        <div class="sp-content">
                            <div class="sp-info">posted 2h ago</div>
                            <p class="sp-paragraph mb-0">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                        </div>
                        <!-- /.sp-content -->
                    </div>
                    <!-- /.stream-post -->
                    <div class="stream-post">
                        <div class="sp-author">
                            <a href="#" class="sp-author-avatar">
                                <img src="../assets/global/images/104.jpg" alt="">
                            </a>
                            <h6 class="sp-author-name">
                            <a href="#">Kent Lemaitre</a>
                            </h6>
                        </div>
                        <div class="sp-content">
                            <div class="sp-info">posted 2h ago</div>
                            <div class="sp-gallery d-flex flex-wrap">
                                <a href="../assets/global/images/blog-img-16.jpg" data-lightbox="sp-gallery-1" data-title="post gallery image">
                                <img src="../assets/global/images/blog-img-16.jpg" alt=""> </a>
                                <a href="../assets/global/images/blog-img-17.jpg" data-lightbox="sp-gallery-1" data-title="post gallery image">
                                <img src="../assets/global/images/blog-img-17.jpg" alt=""> </a>
                                <a href="../assets/global/images/blog-img-19.jpg" data-lightbox="sp-gallery-1" data-title="post gallery image">
                                    <img src="../assets/global/images/blog-img-19.jpg" alt="">
                                </a>
                            </div>
                            <!-- /.sp-gallery -->
                        </div>
                        <!-- /.sp-content -->
                    </div>
                    <!-- /.stream-post -->
                    <div class="stream-post mb-0">
                        <div class="sp-author">
                            <a href="#" class="sp-author-avatar">
                                <img src="../assets/global/images/105.jpg" alt="">
                            </a>
                            <h6 class="sp-author-name">
                            <a href="#">Loria Lambing</a>
                            </h6>
                        </div>
                        <div class="sp-content">
                            <div class="sp-info">posted 2 days ago</div>
                            <p class="sp-paragraph">Auk Soldanella plainscraft acetonylidene wolfishness irrecognizant Candolleaceae provision Marsipobranchii arpen Paleoanthropus supersecular inidoneous</p>
                            <p class="sp-paragraph">autoplagiarism palmcrist occamy equestrianism periodontoclasia mucedin overchannel goelism decapsulation pourer zira</p>
                        </div>
                        <!-- /.sp-content -->
                    </div>
                    <!-- /.stream-post -->
                </div>
                <!-- /.stream-posts -->
            </div>
            <div class="tab-pane" id="profile-settings" role="tabpanel">
                <div class="edit-cover mb-4">
                    <img class="img-fluid" src="../assets/global/images/profile-cover-2.jpg" alt=""> <button class="btn btn-sm btn-success px-4">Edit</button>
                </div>
                <!-- /.edit-cover -->
                <div class="row">
                    <div class="col-xl-2 col-md-3">
                        <div class="d-flex flex-wrap align-content-start justify-content-between">
                            <div>
                                <a href="#">
                                    <img src="../assets/global/images/profile-avatar-2.jpg" alt="" class="img-thumbnail mb-3">
                                </a>
                                <div>
                                    <button class="btn btn-primary btn-sm px-3 mr-2">Edit</button> <button class="btn btn-success btn-sm">X</button>
                                </div>
                            </div>
                            <div class="mt-5">
                                <div class="mb-3">
                                    <strong>Your Gender:</strong>
                                </div>
                                <label class="d-block custom-control custom-radio">
                                    <input id="radio1" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator">
                                    </span> <span class="custom-control-description">Male</span>
                                </label>
                                <label class="d-block custom-control custom-radio">
                                    <input id="radio2" name="radio" checked="checked" type="radio" class="custom-control-input"> <span class="custom-control-indicator">
                                    </span> <span class="custom-control-description">Female</span>
                                </label>
                            </div>
                        </div>
                        <!-- /.d-flex -->
                    </div>
                    <!-- /.col- -->
                    <div class="col-xl-10 col-md-9">
                        <form action="#">
                            <h5 class="my-4">Basic Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__name">YOUR NAME</label>
                                        <input type="text" id="edit__name" class="form-control" value="DWIGHT GULLY">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__password">YOUR PASSWORD</label>
                                        <input type="password" id="edit__password" class="form-control" value="fake-password">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-12">
                                    <label for="edit__bio">WHO AM I</label>
                                    <textarea name="edit__bio" id="edit__bio" class="form-control" rows="6">vichyssoise aetheogamous care callosal prothetically Iberism stratospherical eozoon gentianose spermotoxin bibitory pterotheca unportraited trimodal benzol</textarea>
                                </div>
                            </div>
                            <!-- /.row -->
                            <h5 class="my-4 profile-edit-section-heading">Contact Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__email">EMAIL</label>
                                        <input type="email" id="edit__email" class="form-control" value="someone@example.com">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__website">WEBSITE</label>
                                        <input type="url" id="edit__website" class="form-control" value="http://www.example.com">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__phone">PHONE</label>
                                        <input type="text" id="edit__phone" class="form-control" value="000-5421-524">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__skype">SKYPE</label>
                                        <input type="text" id="edit__skype" class="form-control" value="myskype">
                                    </div>
                                </div>
                                <!-- /.col- -->
                            </div>
                            <!-- /.row -->
                            <h5 class="my-4 profile-edit-section-heading">General Information</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__job">JOB</label>
                                        <input type="text" id="edit__job" class="form-control" value="Web Developer">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__position">POSITION</label>
                                        <input type="text" id="edit__position" class="form-control" value="Team Manager">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__major">STUDIED</label>
                                        <input type="text" id="edit__major" class="form-control" value="computer science">
                                    </div>
                                </div>
                                <!-- /.col- -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit__school">HIGH SCHOOL</label>
                                        <input type="text" id="edit__school" class="form-control" value="Fake High school">
                                    </div>
                                </div>
                                <!-- /.col- -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-success mt-5">Save</button>
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