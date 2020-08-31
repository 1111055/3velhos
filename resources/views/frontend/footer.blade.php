
<!--Footer Start-->
<section class="bg-light text-center">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled">
                     @foreach($socials as $k => $item)
                 
                     <li><a class="wow fadeInUp"target="_blank" href="{{$item->link}}"><i class="{{$item->class}}" aria-hidden="true"></i></a></li>
                  @endforeach  
                    </ul>
                </div>
                <p class="company-about fadeIn">©feelbit  <a href="https://feelbit.pt" target="_blank">FeelBit</a></p>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->

<!--Scroll Top-->
<a class="scroll-top-arrow gradient-bg1" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!--Scroll Top End-->