@extends('layout.website.website')

@section('title', 'Knowledge Details Post')

@section('head')
<style>
    #header{
        display: none;
    }
</style>
@endsection

@section('content')
@include('layout.website.include.forum_header')

<section class="knowledge-forum">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="knowledge-forum-left-new">
                    <ul class="list-inline">
                        <li>
                            <div class="answer-profile">
                                <div class="answer-profile-pic"><img src="{{asset('asset_website/img/knowladge-forum/image2.png')}}" class="w100"></div>
                                <div class="answer-profile-desc">
                                    <h4 class="small-heading-black mb0">{{$knowledge_post->user->firstname}} {{$knowledge_post->user->lastname}}</h4>
                                    <p class="mb0">M.Sc Student</p>
                                </div>
                                <span class="answer-span">{{$knowledge_post->created_at->diffForHumans()}}</span>
                            </div>
                            <div class="answer-describtion">
                                <h4 class="small-heading-black">Q: {{$knowledge_post->question}}</h4>
                                <p class="text-justify">{{$knowledge_post->description}}</p>
                                <a href="{{$knowledge_post->links}}" class="post-link">{{$knowledge_post->links}}</a>
                                <div class="answer-btn-box">
                                    <ul class="list-inline answer-btn-list">
                                        <span>Comment </span>&nbsp;
                                        <span>Views {{$total_knowledge_post_views}}</span>
                                    </ul>
                                </div>
                                @auth
                                    <div class="mt20 mb-4">
                                        <span class="knowledge-profile"><img src="{{asset('asset_website/img/knowladge-forum/image4.png')}}"></span>
                                        <h6 class="knowledge-text ">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h6>
                                        <form action="{{route('website.knowledge.comment')}}" method="POST" >
                                            @csrf
                                            <input type="hidden" name="commented_by" value={{Auth::user()->id}}>
                                            <input type="hidden" name="post_id" value="{{$knowledge_post->id}}">
                                            <textarea name="comment" class="form-control" id="comment" placeholder="Add answer here" required></textarea>
                                            <button class="btn knowledge-link-post-btn mt-1" style="float:right">Post</button>
                                        </form>
                                    </div>
                                @endauth
                                <div>
                                    <h4 class="small-heading-black mt20 mb0">Answers</h4>
                                    @if(!$knowledge_comment->isEmpty())
                                    <ul class="list-inline comment-list">
                                        @foreach($knowledge_comment as $comment)
                                        <li>
                                            <div class="answer-profile1">
                                                <div class="answer-profile-pic1"><img src="{{asset('asset_website/img/knowladge-forum/image2.png')}}" class="w100"></div>
                                                <div class="answer-profile-desc1">
                                                    <h4 class="small-heading-black1 mb0">{{$comment->user->firstname}} {{$comment->user->lastname}}</h4>
                                                    <p class="small-comment">M.Sc Student</p>
                                                    <p class="text-justify">{{$comment->comments}}</p>
                                                </div>
                                                <span class="answer-span1">{{$comment->created_at->diffForHumans()}}</span>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    {{$knowledge_comment->links()}}
                                    @else 
                                        <div class="text-center">
                                            <p>No answers to show</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @auth
              <div class="col-lg-4">
                <div class="knowledge-forum-right1">
                    <div class="knowledge-forum-profile-top"><img src="{{asset('asset_website/img/knowladge-forum/bg.png')}}" class="w100"></div>
                    <div class="knowledge-forum-profile-bottom">
                        <div class="knowledge-pic"><img src="{{asset('asset_website/img/knowladge-forum/image1.png')}}" class="w100"></div>
                        <div class="knowledge-desc">
                            <h4 class="small-heading-black text-center mt-2 mb0">{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
                            <p class="text-center">M.Sc Student</p>
                            <div class="question-box">
                                <ul class="list-inline question-point-list">
                                  <ul class="list-inline question-point-list">
                                    <li><a href="{{route('website.knowledge.tab')}}">Questions Asked<span class="question-no">{{$total_questions}}</span></a></li>
                                    <li><a href="{{route('website.knowledge.tab')}}">Answered<span class="question-no">{{$total_post_commented_by_one_user}}</span></a></li>
                                    {{-- <li><a href="{{route('website.knowledge.tab')}}">Post<span class="question-no">{{$total_knowledge_post}}</span></a></li> --}}
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div> 
            @endauth    
        </div>
    </div>
</section>

@include('layout.website.include.modals')
@endsection

@section('scripts')



@endsection