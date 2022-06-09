@extends('home')

@section('content')
<div class="nk-content-body">
  <div class="nk-block">
    @if ($message = Session::get('success'))
    <div class="alert alert-pro alert-primary alert-dismissible">
        <div class="alert-text">
            <h6>Alerta</h6>
            <p>{{ $message }}</p>
        </div>
        <button class="close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-pro alert-danger alert-dismissible">
        <div class="alert-text">
            <h6>Ops! Alguns erros encontrados</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button class="close" data-bs-dismiss="alert"></button>
    </div>
    @endif

  <div class="nk-msg">
      <div class="nk-msg-body bg-white">
          <div class="nk-msg-reply nk-reply" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
              <div class="nk-msg-head py-4 d-lg-none">
                  <h4 class="title">Unable to select currency when order</h4>
                  <ul class="nk-msg-tags">
                      <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                  </ul>
              </div>
              <div class="nk-reply-item">
                  <div class="nk-reply-header">
                      <div class="user-card">
                          <div class="user-avatar sm bg-blue">
                              <span>AB</span>
                          </div>
                          <div class="user-name">Abu Bin Ishtiyak</div>
                      </div>
                      <div class="date-time">14 Jan, 2020</div>
                  </div>
                  <div class="nk-reply-body">
                      <div class="nk-reply-entry entry">
                          <p>Hello team,</p>
                          <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                          <p>Thank you <br> Ishityak</p>
                      </div>
                      <div class="attach-files">
                          <ul class="attach-list">
                              <li class="attach-item">
                                  <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                              </li>
                              <li class="attach-item">
                                  <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                              </li>
                          </ul>
                          <div class="attach-foot">
                              <span class="attach-info">2 files attached</span>
                              <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                          </div>
                      </div>
                  </div>
              </div><!-- .nk-reply-item -->
             
              <div class="nk-reply-form">
                  <div class="nk-reply-form-header">
                      <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                          <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" href="#reply-form">Reply</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#note-form">Private Note</a>
                          </li>
                      </ul>
                      <div class="nk-reply-form-title">
                          <div class="title">Reply as:</div>
                          <div class="user-avatar xs bg-purple">
                              <span>IH</span>
                          </div>
                      </div>
                  </div>
                  <div class="tab-content">
                      <div class="tab-pane active" id="reply-form">
                          <div class="nk-reply-form-editor">
                              <div class="nk-reply-form-field">
                                  <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                              </div>
                              <div class="nk-reply-form-tools">
                                  <ul class="nk-reply-form-actions g-1">
                                      <li class="me-2"><button class="btn btn-primary" type="submit">Reply</button></li>
                                      <li>
                                          <div class="dropdown">
                                              <a class="btn btn-icon btn-sm" data-bs-toggle="dropdown" href="#"><em class="icon ni ni-hash" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Template" aria-label="Template"></em></a>
                                              <div class="dropdown-menu">
                                                  <ul class="link-list-opt no-bdr link-list-template">
                                                      <li class="opt-head"><span>Quick Insert</span></li>
                                                      <li><a href="#"><span>Thank you message</span></a></li>
                                                      <li><a href="#"><span>Your issues solved</span></a></li>
                                                      <li><a href="#"><span>Thank you message</span></a></li>
                                                      <li class="divider">
                                                      </li><li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                      <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <a class="btn btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" href="#" data-bs-original-title="Upload Attachment" aria-label="Upload Attachment"><em class="icon ni ni-clip-v"></em></a>
                                      </li>
                                      <li>
                                          <a class="btn btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" href="#" data-bs-original-title="Insert Emoji" aria-label="Insert Emoji"><em class="icon ni ni-happy"></em></a>
                                      </li>
                                      <li>
                                          <a class="btn btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" href="#" data-bs-original-title="Upload Images" aria-label="Upload Images"><em class="icon ni ni-img"></em></a>
                                      </li>
                                  </ul>
                                  <div class="dropdown">
                                      <a href="#" class="dropdown-toggle btn-trigger btn btn-icon me-n2" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                      <div class="dropdown-menu dropdown-menu-end">
                                          <ul class="link-list-opt no-bdr">
                                              <li><a href="#"><span>Another Option</span></a></li>
                                              <li><a href="#"><span>More Option</span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div><!-- .nk-reply-form-tools -->
                          </div><!-- .nk-reply-form-editor -->
                      </div>
                      <div class="tab-pane" id="note-form">
                          <div class="nk-reply-form-editor">
                              <div class="nk-reply-form-field">
                                  <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                              </div>
                              <div class="nk-reply-form-tools">
                                  <ul class="nk-reply-form-actions g-1">
                                      <li class="me-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                      <li>
                                          <a class="btn btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" href="#" data-bs-original-title="Upload Attachment" aria-label="Upload Attachment"><em class="icon ni ni-clip-v"></em></a>
                                      </li>
                                  </ul>
                                  <div class="dropdown">
                                      <a href="#" class="dropdown-toggle btn-trigger btn btn-icon me-n2" data-bs-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                      <div class="dropdown-menu dropdown-menu-end">
                                          <ul class="link-list-opt no-bdr">
                                              <li><a href="#"><span>Another Option</span></a></li>
                                              <li><a href="#"><span>More Option</span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div><!-- .nk-reply-form-tools -->
                          </div><!-- .nk-reply-form-editor -->
                      </div>
                  </div>
              </div><!-- .nk-reply-form -->
          </div>
        </div>
      </div>
    </div><div class="simplebar-placeholder" style="width: auto; height: 1375px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar simplebar-visible" style="height: 25px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div><!-- .nk-reply -->
          <div class="nk-msg-profile" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
              <div class="card">
                  <div class="card-inner-group">
                      <div class="card-inner">
                          <div class="user-card user-card-s2 mb-2">
                              <div class="user-avatar md bg-primary">
                                  <span>AB</span>
                              </div>
                              <div class="user-info">
                                  <h5>Abu Bin Ishtiyak</h5>
                                  <span class="sub-text">Customer</span>
                              </div>
                              <div class="user-card-menu dropdown">
                                  <a href="#" class="btn btn-icon btn-sm btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                  <div class="dropdown-menu dropdown-menu-end">
                                      <ul class="link-list-opt no-bdr">
                                          <li><a href="#"><em class="icon ni ni-eye"></em><span>View Profile</span></a></li>
                                          <li><a href="#"><em class="icon ni ni-na"></em><span>Ban From System</span></a></li>
                                          <li><a href="#"><em class="icon ni ni-repeat"></em><span>View Orders</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="row text-center g-1">
                              <div class="col-4">
                                  <div class="profile-stats">
                                      <span class="amount">23</span>
                                      <span class="sub-text">Total Order</span>
                                  </div>
                              </div>
                              <div class="col-4">
                                  <div class="profile-stats">
                                      <span class="amount">20</span>
                                      <span class="sub-text">Complete</span>
                                  </div>
                              </div>
                              <div class="col-4">
                                  <div class="profile-stats">
                                      <span class="amount">3</span>
                                      <span class="sub-text">Progress</span>
                                  </div>
                              </div>
                          </div>
                      </div><!-- .card-inner -->
                      <div class="card-inner">
                          <div class="aside-wg">
                              <h6 class="overline-title-alt mb-2">User Information</h6>
                              <ul class="user-contacts">
                                  <li>
                                      <em class="icon ni ni-mail"></em><span>info@softnio.com</span>
                                  </li>
                                  <li>
                                      <em class="icon ni ni-call"></em><span>+938392939</span>
                                  </li>
                                  <li>
                                      <em class="icon ni ni-map-pin"></em><span>1134 Ridder Park Road <br>San Fransisco, CA 94851</span>
                                  </li>
                              </ul>
                          </div>
                          <div class="aside-wg">
                              <h6 class="overline-title-alt mb-2">Additional</h6>
                              <div class="row gx-1 gy-3">
                                  <div class="col-6">
                                      <span class="sub-text">Ref ID: </span>
                                      <span>TID-049583</span>
                                  </div>
                                  <div class="col-6">
                                      <span class="sub-text">Requested:</span>
                                      <span>Abu Bin Ishtiak</span>
                                  </div>
                                  <div class="col-6">
                                      <span class="sub-text">Status:</span>
                                      <span class="lead-text text-success">Open</span>
                                  </div>
                                  <div class="col-6">
                                      <span class="sub-text">Last Reply:</span>
                                      <span>Abu Bin Ishtiak</span>
                                  </div>
                              </div>
                          </div>
                          <div class="aside-wg">
                              <h6 class="overline-title-alt mb-2">Assigned Account</h6>
                              <ul class="align-center g-2">
                                  <li>
                                      <div class="user-avatar bg-purple">
                                          <span>IH</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="user-avatar bg-pink">
                                          <span>ST</span>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="user-avatar bg-gray">
                                          <span>SI</span>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div><!-- .card-inner -->
                  </div>
              </div>
          </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 718px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 82px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div><!-- .nk-msg-profile -->
      </div><!-- .nk-msg-body -->
  </div>
  </div><!-- .nk-block -->
</div><!-- .nk-content-body -->
@endsection