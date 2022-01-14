<section class="video_section">
    <video class="video" id="video" poster="{{asset('video_thumbnail.png')}}">
    </video>
    <img
        src="{{asset('frontend/images/play.png')}}"
        alt="play"
        title="Play"
        class="play_icon"
        data-toggle="modal" data-target="#video_modal"
    />
</section>
<!-- Modal -->
<div class="modal fade-scale video_modal" id="video_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <video class="modal_video" controls>
                    <source src="{{asset('frontend/videos/aboutVideo.mp4')}}" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>
</div>