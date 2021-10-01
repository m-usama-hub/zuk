<div class="modal fade rateme" id="rateme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-star"></i>Rate me</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="{{ route('PostReview') }}" method="post">
                    @csrf
                    <div class="col-md-12 col-12 submit">
                        <h4>
                            Submit a review
                        </h4>
                        <p class="company" id="company">Jason Electricals Inc</p>
                        <a href="" id="services">Landscaping, Stonework, Deck</a>
                        <p id="address">27 Vanguard Drive, Etobicoke ON M9B 5E7</p>
                    </div>
                    <div class="col-md-12 col-12 writing_div">
                        <label for="" class="labels">Enter the name of service provided</label>
                        <input type="text" name="service_provided" required class="textarea">
                    </div>
                    <div class="col-md-12 col-12 writing_div">
                        <label for="" class="labels">Enter your written review</label>
                        <textarea name="review" class="textarea2" required> </textarea>
                    </div>
                    <div class="col-md-12 col-12 ratings">
                        <h4>
                            Your rating is
                        </h4>
                        <p class="numbers"><span id="setAvg">0.0</span>/5</p>
                    </div>
                    <div class="col-md-12 col-12 criteria">
                        <p>Lowest</p>
                        <div class="star_count">1 2 3 4 5 </div>
                        <p>Highest</p>

                    </div>
                    <div class="col-md-12 col-12 criteria">
                        <p>Quality of work
                        </p>
                        <div class="stars" id="s_quality">
                            <input type="radio" name="quality_rating" id="st1radio" value="1" style="display: none" required />
                            <label for="st1radio"><i class="fas fa-star" id="st1"></i></label>
                            <input type="radio" name="quality_rating" id="st2radio" value="2" style="display: none"/>
                            <label for="st2radio"><i class="fas fa-star" id="st2"></i></label>
                            <input type="radio" name="quality_rating" id="st3radio" value="3" style="display: none"/>
                            <label for="st3radio"><i class="fas fa-star" id="st3"></i></label>
                            <input type="radio" name="quality_rating" id="st4radio" value="4" style="display: none"/>
                            <label for="st4radio"><i class="fas fa-star" id="st4"></i></label>
                            <input type="radio" name="quality_rating" id="st5radio" value="5" style="display: none"/>
                            <label for="st5radio"><i class="fas fa-star" id="st5"></i></label>
                        </div>
                        <div class="star_rating_custom">
                            <p>N/A <input type="radio" name="quality_rating" value="0" class="radio_but"></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 criteria ">
                        <p class="rate_me_time">Timeliness</p>
                        <div class="stars">
                            <input type="radio" name="timeliness_rating" id="st1radiotimeliness" value="1" style="display: none" required />
                            <label for="st1radiotimeliness"><i class="fas fa-star" id="sttimeliness1"></i></label>
                            <input type="radio" name="timeliness_rating" id="st2radiotimeliness" value="2" style="display: none"/>
                            <label for="st2radiotimeliness"><i class="fas fa-star" id="sttimeliness2"></i></label>
                            <input type="radio" name="timeliness_rating" id="st3radiotimeliness" value="3" style="display: none"/>
                            <label for="st3radiotimeliness"><i class="fas fa-star" id="sttimeliness3"></i></label>
                            <input type="radio" name="timeliness_rating" id="st4radiotimeliness" value="4" style="display: none"/>
                            <label for="st4radiotimeliness"><i class="fas fa-star" id="sttimeliness4"></i></label>
                            <input type="radio" name="timeliness_rating" id="st5radiotimeliness" value="5" style="display: none"/>
                            <label for="st5radiotimeliness"><i class="fas fa-star" id="sttimeliness5"></i></label>
                        </div>
                        <div class="star_rating_custom">
                            <p>N/A <input type="radio" name="timeliness_rating" value="0" class="radio_but"></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 criteria ">
                        <p class="rate_me_clean">Cleanliness</p>
                        <div class="stars">
                            <input type="radio" name="cleanliness_rating" id="st1radioCleanliness" value="1" style="display: none" required />
                            <label for="st1radioCleanliness"><i class="fas fa-star" id="stCleanliness1"></i></label>
                            <input type="radio" name="cleanliness_rating" id="st2radioCleanliness" value="2" style="display: none"/>
                            <label for="st2radioCleanliness"><i class="fas fa-star" id="stCleanliness2"></i></label>
                            <input type="radio" name="cleanliness_rating" id="st3radioCleanliness" value="3" style="display: none"/>
                            <label for="st3radioCleanliness"><i class="fas fa-star" id="stCleanliness3"></i></label>
                            <input type="radio" name="cleanliness_rating" id="st4radioCleanliness" value="4" style="display: none"/>
                            <label for="st4radioCleanliness"><i class="fas fa-star" id="stCleanliness4"></i></label>
                            <input type="radio" name="cleanliness_rating" id="st5radioCleanliness" value="5" style="display: none"/>
                            <label for="st5radioCleanliness"><i class="fas fa-star" id="stCleanliness5"></i></label>
                        </div>
                        <div class="star_rating_custom">
                            <p>N/A <input type="radio" name="cleanliness_rating" value="0" class="radio_but"></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 criteria ">
                        <p class="rate_budget">On Budget</p>
                        <div class="stars">
                            <input type="radio" name="budget_rating" id="st1radiobudget" value="1" style="display: none" required/>
                            <label for="st1radiobudget"><i class="fas fa-star" id="stbudget1"></i></label>
                            <input type="radio" name="budget_rating" id="st2radiobudget" value="2" style="display: none"/>
                            <label for="st2radiobudget"><i class="fas fa-star" id="stbudget2"></i></label>
                            <input type="radio" name="budget_rating" id="st3radiobudget" value="3" style="display: none"/>
                            <label for="st3radiobudget"><i class="fas fa-star" id="stbudget3"></i></label>
                            <input type="radio" name="budget_rating" id="st4radiobudget" value="4" style="display: none"/>
                            <label for="st4radiobudget"><i class="fas fa-star" id="stbudget4"></i></label>
                            <input type="radio" name="budget_rating" id="st5radiobudget" value="5" style="display: none"/>
                            <label for="st5radiobudget"><i class="fas fa-star" id="stbudget5"></i></label>
                        </div>
                        <div class="star_rating_custom">
                            <p>N/A <input type="radio" name="budget_rating" value="0" class="radio_but"></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 criteria">
                        <p>Communication</p>
                        <div class="stars">
                            <input type="radio" name="coummunication_rating" id="st1radiocoummunication" value="1" style="display: none" required />
                            <label for="st1radiocoummunication"><i class="fas fa-star" id="stcoummunication1"></i></label>
                            <input type="radio" name="coummunication_rating" id="st2radiocoummunication" value="2" style="display: none"/>
                            <label for="st2radiocoummunication"><i class="fas fa-star" id="stcoummunication2"></i></label>
                            <input type="radio" name="coummunication_rating" id="st3radiocoummunication" value="3" style="display: none"/>
                            <label for="st3radiocoummunication"><i class="fas fa-star" id="stcoummunication3"></i></label>
                            <input type="radio" name="coummunication_rating" id="st4radiocoummunication" value="4" style="display: none"/>
                            <label for="st4radiocoummunication"><i class="fas fa-star" id="stcoummunication4"></i></label>
                            <input type="radio" name="coummunication_rating" id="st5radiocoummunication" value="5" style="display: none"/>
                            <label for="st5radiocoummunication"><i class="fas fa-star" id="stcoummunication5"></i></label>
                        </div>
                        <div class="star_rating_custom">
                            <p>N/A <input type="radio" name="coummunication_rating" value="0" class="radio_but"></p>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 confirm ">
                        <p class="note"><b>I hereby confirm</b> that I hired the above service provider and
                            that this review is based on my personal experience of the service that I received and is my
                            honest opinion of this company or person. I have not received any additional benefits or
                            rewards for providing this review.
                        </p>
                    </div>
                    <div class="col-md-12 submit_review">
                        <p class="head">Submit my review</p>
                        <p>By submitting this review you agree to our <a href="">Terms of Use
                                and Privacy Policy.</a>
                        </p>
                        <button class="rate_me_btn btn-primary" type="submit">Submit Now</button>
                    </div>
                    <input type="hidden" name="business_id" id="business_id">
                </form>
            </div>
        </div>
    </div>
</div>
