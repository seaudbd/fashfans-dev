<div style="z-index: 9999 !important;" class="central-meta postbox">
    <span class="create-post">Create post</span>
    <div class="new-postbox">
        <form action="{{route('createpost')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <figure class="post_create_figure">
                <img src="{{asset(Auth::user()->shop->logo?Auth::user()->shop->logo:'frontend/images/placeholder.jpg')}}">
                <span>{{Auth::user()->shop->name}}</span>
            </figure>
            <div class="newpst-input">
                <textarea class="textarea" name="content" rows="0" placeholder="What's on your mind, {{strtolower(Auth::user()->shop->name)}}?"></textarea>
            </div>
            <div class="attachments">
                <ul>
                    <li>
                        <i title="Add Photo" class="fa fa-image add_image"></i>
                        <label class="fileContainer">
                            <input title="Add Photo" class="image_input" name="image" type="file" accept="image/*">
                        </label>
                    </li>

                    <li>
                        <i title="Add Video" class="fa fa-video add_video"></i>
                        <label class="fileContainer">
                            <input title="Add Video" class="video_input" name="video" type="file" accept="video/*">
                        </label>
                    </li>
                </ul>
                <div id="post_image_preview_zone"></div>
            </div>
            <button id="post_btn" class="post-btn" type="submit" data-ripple="">Post</button>
        </form>
    </div>  
</div>