@extends('layouts.blog')

@section('content')
    <!-- Blog -->
    <section id="blog" class="clearfix boxed pt-40 mb-80">
        <!-- Posts -->
        <div class="posts pl-00 pr-10 mt-90">

            <!-- Post -->
            <div class="post clearfix">
                <!-- Left, Dates -->
                <div class="dates f-left">
                    <!-- Post Time -->
                    <h6 class="date">
						<span class="day colored helvetica">
							06
						</span>
                        April, 2015
                    </h6>
                    <!-- Details -->
                    <div class="details">
                        <ul class="t-right fullwidth">
                            <!-- Posted By -->
                            <li>
                                Posted By <a href="#">Admin</a>
                                <i class="fa fa-user"></i>
                            </li>
                            <!-- Comments -->
                            <li>
                                <a href="#">12 Comments</a>
                                <i class="fa fa-comments"></i>
                            </li>
                            <!-- Tags -->
                            <li>
                                <a href="#">Design</a>,
                                <a href="#">Web</a>,
                                <a href="#">Video</a>
                                <i class="fa fa-user"></i>
                            </li>
                            <!-- Liked -->
                            <li>
                                <a href="#">Extra Link</a>
                                <i class="fa fa-link"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- End Details -->
                </div>
                <!-- End Left, Dates -->
                <!-- Post Inner -->
                <div class="post-inner f-right">
                    <!-- Header -->
                    <h2 class="post-header semibold">
                        Post With Stunning <span class="colored">Video</span>
                    </h2>
                    <!-- Media -->
                    <div class="post-media fitvid">
                        <iframe src="http://player.vimeo.com/video/95749719?title=0&amp;byline=0&amp;portrait=0&amp;color=ff0179"></iframe>
                    </div>
                    <!-- Description -->
                    <p class="post-text light">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Cont ent here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                    <!-- Description -->
                    <p class="post-text light">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Cont ent here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                    <!-- BlockQuote -->
                    <blockquote class="mt-25">
                        <p class="light">
                            It is a long established fact that a <span class="colored">reader</span> will be distracted by the readable content of a page when at its layout.
                        </p>
                        <p class="light mini-text">
                            It is a long established fact.
                        </p>
                    </blockquote>
                    <!-- Description -->
                    <p class="post-text light mb-10">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <span class="colored">The Point</span> of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Cont ent here, content here', making it look like readable English.
                    </p>
                    <!-- Sub Header -->
                    <h3 class="mt-15 mb-00 pb-00 text-20 light">
                        Sub Header
                    </h3>
                    <!-- Description -->
                    <p class="post-text mt-10 light">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <span class="white colored-bg">The Point</span> of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Cont ent here, content here', making it look like readable English.
                    </p>
                    <!-- Sub Header -->
                    <h3 class="mt-15 mb-00 pb-00 text-30 light">
                        Sub Header
                        <span class="mini-text italic">- Example Text -</span>
                    </h3>
                    <!-- Description -->
                    <p class="post-text mt-10 light">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Cont ent here, content here', making it look like readable English.
                    </p>
                    <!-- List -->
                    <ul class="list-disc post-text ml-25 mt-25">
                        <li class="mb-10">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        </li>
                        <li class="mb-10">
                            Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes.
                        </li>
                        <li class="mb-10">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered classical Latin literature alteration in some form, by injected humour, or randomised words which.
                        </li>
                    </ul>


                    <div class="fullwidth">

                        <!-- Comments -->
                        <div class="comments mt-60">
                            <!-- Header -->
                            <h2 class="comments-header text-20 mt-40">
                                Comments
                            </h2>
                            <!-- Media -->
                            <div class="media mt-60">
                                <!-- Image, Left -->
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('/images/user_01.jpg') }}" alt="User">
                                    </a>
                                </div>
                                <!-- Body -->
                                <div class="media-body">
                                    <div class="details">
                                        <!-- Header -->
                                        <h4 class="media-heading">
                                            John Doe
                                            <span class="light mini-text ml-15">April 23, 2015, PM 09:34</span>
                                        </h4>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                                        <!-- Votes -->
                                        <p class="votes t-right helvetica mt-20">
                                            <!-- Like -->
                                            <a href="#" class="like">
                                                <i class="fa fa-thumbs-o-up"></i>
                                                <span>+22</span>
                                            </a>
                                            <!-- Unlike -->
                                            <a href="#" class="unlike">
                                                <i class="fa fa-thumbs-o-down"></i>
                                                <span>-3</span>
                                            </a>
                                            <!-- Reply -->
                                            <a href="#" class="reply">
                                                <i class="fa fa-reply"></i>
                                                <span>Reply</span>
                                            </a>
                                        </p>
                                    </div>

                                    <!-- Second Inner Media -->
                                    <div class="media">
                                        <!-- Image, Left -->
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{ asset('/images/user_02.jpg') }}" alt="User">
                                            </a>
                                        </div>
                                        <!-- Body -->
                                        <div class="media-body">
                                            <div class="details">
                                                <!-- Header -->
                                                <h4 class="media-heading">
                                                    John Doe
                                                    <span class="light mini-text ml-15">April 23, 2015, PM 09:34</span>
                                                </h4>
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                                                <!-- Votes -->
                                                <p class="votes t-right helvetica mt-20">
                                                    <!-- Like -->
                                                    <a href="#" class="like">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                        <span>+4</span>
                                                    </a>
                                                    <!-- Unlike -->
                                                    <a href="#" class="unlike">
                                                        <i class="fa fa-thumbs-o-down"></i>
                                                        <span>0</span>
                                                    </a>
                                                    <!-- Reply -->
                                                    <a href="#" class="reply">
                                                        <i class="fa fa-reply"></i>
                                                        <span>Reply</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End Body -->
                                    </div>
                                    <!-- End Second Media -->

                                    <!-- Third Inner Media -->
                                    <div class="media">
                                        <!-- Image, Left -->
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{ asset('/images/user_03.jpg') }}" alt="User">
                                            </a>
                                        </div>
                                        <!-- Body -->
                                        <div class="media-body">
                                            <div class="details">
                                                <!-- Header -->
                                                <h4 class="media-heading">
                                                    John Doe
                                                    <span class="light mini-text ml-15">April 23, 2015, PM 09:34</span>
                                                </h4>
                                                If you are going to use a passage of Lorem Ipsum, you need to be sure.
                                                <!-- Votes -->
                                                <p class="votes t-right helvetica mt-20">
                                                    <!-- Like -->
                                                    <a href="#" class="like">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                        <span>+9</span>
                                                    </a>
                                                    <!-- Unlike -->
                                                    <a href="#" class="unlike">
                                                        <i class="fa fa-thumbs-o-down"></i>
                                                        <span>-5</span>
                                                    </a>
                                                    <!-- Reply -->
                                                    <a href="#" class="reply">
                                                        <i class="fa fa-reply"></i>
                                                        <span>Reply</span>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End Body -->
                                    </div>
                                    <!-- End Third Media -->

                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Media -->

                            <!-- Media -->
                            <div class="media">
                                <!-- Image, Left -->
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="{{ asset('/images/user_04.jpg') }}" alt="User">
                                    </a>
                                </div>
                                <!-- Body -->
                                <div class="media-body">
                                    <div class="details">
                                        <!-- Header -->
                                        <h4 class="media-heading">
                                            John Doe
                                            <span class="light mini-text ml-15">April 23, 2015, PM 09:34</span>
                                        </h4>
                                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                        <!-- Votes -->
                                        <p class="votes t-right helvetica mt-20">
                                            <!-- Like -->
                                            <a href="#" class="like">
                                                <i class="fa fa-thumbs-o-up"></i>
                                                <span>+14</span>
                                            </a>
                                            <!-- Unlike -->
                                            <a href="#" class="unlike">
                                                <i class="fa fa-thumbs-o-down"></i>
                                                <span>-2</span>
                                            </a>
                                            <!-- Reply -->
                                            <a href="#" class="reply">
                                                <i class="fa fa-reply"></i>
                                                <span>Reply</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Body -->
                            </div>
                            <!-- End Media -->
                        </div>
                        <!-- End Comments -->

                        <!-- Reply Form -->
                        <div class="reply-form">
                            <!-- Header -->
                            <p class="uppercase comments-header light post-text">
                                Leave a Comment
                            </p>
                            <!-- Form -->
                            <form method="post">
                                <!-- Half / Name -->
                                <div class="col-xs-6 pl-00 pr-10">
                                    <input type="text" name="name" id="name" class="transparent fullwidth light-form" placeholder="Name *">
                                </div>
                                <!-- Half / Email -->
                                <div class="col-xs-6 pl-10 pr-00">
                                    <input type="email" name="email" id="email" class="transparent fullwidth light-form" placeholder="Email *">
                                </div>
                                <!-- WebSite -->
                                <div class="col-xs-12 pr-00 pl-00 mt-15">
                                    <input type="text" name="website" id="website" class="transparent fullwidth light-form" placeholder="Website">
                                </div>
                                <!-- Message -->
                                <div class="col-xs-12 pr-00 pl-00 mt-15">
                                    <textarea name="message" id="message" class="transparent fullwidth light-form" placeholder="Message"></textarea>
                                </div>
                                <!-- Button -->
                                <button type="submit" id="submit" name="submit" class="colored-bg uppercase">Send Comment</button>
                            </form>
                        </div>
                        <!-- End Reply Form -->
                    </div>


                </div>
                <!-- End Post Inner -->
            </div>
            <!-- End Post -->
        </div>
        <!-- End Posts -->

    </section>
    <!-- End Blog -->
@endsection