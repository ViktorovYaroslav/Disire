<?php include 'header.php' ?>
<main class="main blog">
   <div class="video__button_on"></div>
   <div class="video__button_off"></div>
   <div class="blog__container _container">
      <div class="blog__flex">
         <button class="blog-nav__search-btn">
            <img src="images/blog/search.svg" alt="search icon">
         </button>
         <section class="post-body">
            <header class="blog__list-item blog-preview__item">
               <span class="blog-preview__item-image _ibg">
                  <img src="images/blog/01.png" alt="blog image">
               </span>
               <nav class="blog-preview__item-links">
                  <time class="blog-preview__item-link blog-date" href="#">September 28,2020</time>
                  <span class="blog-preview__item-link-separator">|</span>
                  <a class="blog-preview__item-link blog-name" href="#">by Finnagan Morningstar</a>
                  <span class="blog-preview__item-link-separator">|</span>
                  <a class="blog-preview__item-link blog-category" href="#">Dining room interior</a>
               </nav>
               <h3 class="title-h3">
                  <span class="blog-preview__item-title title-h3">Red selfies edison bulb four dollar toast humblebrag</span>
               </h3>
            </header>
            <article class="post-body__article text">
               <p>Everyday carry actually neutra authentic kogi shabby chic migas small batch craft beer. Literally williamsburg tote bag farm-to-table mustache ugh deep v irony. Af man bun copper mug iPhone enamel pin pug selvage hammock palo santo godard thundercats coloring book yuccie woke. Ugh pok pok taxidermy pabst enamel pin edison bulb farm-to-table.</p>
               <p>Yuccie portland kickstarter, readymade ramps humblebrag ennui banjo mumblecore vaporware pickled cray stumptown 8-bit mlkshk. Tumeric tousled austin, kinfolk scenester authentic craft beer truffaut irony intelligentsia YOLO lomo bushwick coloring book. Semiotics man bun venmo viral cliche. Tousled yr williamsburg austin edison bulb cloud bread vegan street art. Locavore food truck trust fund palo santo asymmetrical, franzen deep v marfa kogi whatever swag pop-up seitan.</p>
               <figure class="post-body-quote quote">
                  <blockquote class="post-body-quote-text quote-text line">“Simplicity is not the goal. It is the by-product of a good idea and modest expectations” </blockquote>
                  <figcaption class="post-body-quote-author quote-autor title-h5">
                     <h5>Paul Rand</h5>
                  </figcaption>
               </figure>
               <p>Af man bun copper mug iPhone enamel pin pug selvage hammock palo santo godard thundercats coloring book yuccie woke. Ugh pok pok taxidermy pabst enamel pin edison bulb farm-to-table.
                  Yuccie portland kickstarter, readymade ramps humblebrag ennui banjo mumblecore vaporware pickled cray stumptown 8-bit mlkshk. Tumeric tousled austin, kinfolk scenester authentic craft beer truffaut irony intelligentsia YOLO lomo bushwick coloring book. Semiotics man bun venmo viral cliche. Tousled yr williamsburg austin edison bulb cloud bread vegan street art. Locavore food truck trust fund palo santo asymmetrical, franzen deep v marfa kogi whatever swag pop-up seitan.</p>
            </article>
            <nav class="post-body__tags">
               <h4 class="post-body__tags-title title-h4">Tags</h4>
               <ul class="post-body__tags-list">
                  <li class="post-body__tags-item">
                     <a class="post-body__tags-link" href="#">Bedroom furniture</a>
                  </li>
                  <li class="post-body__tags-item">
                     <a class="post-body__tags-link" href="#">Office furniture</a>
                  </li>
                  <li class="post-body__tags-item">
                     <a class="post-body__tags-link" href="#">Dining room futniture</a>
                  </li>
                  <li class="post-body__tags-item">
                     <a class="post-body__tags-link" href="#">Chair</a>
                  </li>
               </ul>
            </nav>
            <nav class="post__body-nav">
               <ul class="post-body__nav-list">
                  <li class="post-body__nav-item">
                     <a class="post-body__nav-link post-body__nav-link_previous" href="#">
                        <div class="post-body__nav-link-img">
                           <img src="images/blog/previous-post.svg" alt="previous arrow icon">
                        </div>

                        <p>Cred selfies edison bulb four dollar toast humblebrag</p>
                     </a>
                  </li>
                  <li class="post-body__nav-item">
                     <a class="post-body__nav-link post-body__nav-link_next" href="#">
                        <p>Semiotics fixie four dollar toast, next level</p>
                        <div class="post-body__nav-link-img">
                           <img src="images/blog/next-post.svg" alt="previous arrow icon">
                        </div>
                     </a>
                  </li>
               </ul>
            </nav>
            <div class="post-body__comment comment">
               <section class="comments">
                  <h4 class="comments__title title-h4">Comments:</h4>
                  <ul class="comments__list">
                     <li class="comments__item">
                        <div class="comments__comment">
                           <button class="comments__comment-reply">Reply</button>
                           <div class="comments__comment-column comments__comment-avatar">
                              <img src="images/blog/avatar.jpg" alt="profile photo">
                           </div>
                           <article class="comments__comment-column comments__comment-body">
                              <h5 class="comments__comment-name title-h5">Lea Brown</h5>
                              <time class="comments__comment-time text">August 12, 2020</time>
                              <p class="comments__comment-text text">Tumeric tousled austin, kinfolk scenester authentic craft beer truffaut irony intelligentsia YOLO lomo bushwick coloring book. Semiotics man bun venmo viral cliche</p>
                           </article>
                        </div>
                     </li>
                  </ul>
               </section>
               <section class="comment__make">
                  <h5 class="comment__make-title title-h5">Post a comment</h5>
                  <form class="comment__make-form comment-form">
                     <div class="comment__make-form-area form-area text">
                        <div class="form-area__item comment-form__big">
                           <textarea class="comment-form__text comment-form__item " placeholder="Your comment"></textarea>
                        </div>
                        <div class="form-area__item comment-form__small">
                           <input class="comment-form__name comment-form__item" placeholder="Your name" type="text">
                        </div>
                        <div class="form-area__item comment-form__small">
                           <input class="comment-form__email comment-form__item" placeholder="Your name" type="email">
                        </div>
                     </div>

                     <label class="comment-form__check-box-label" for="comment-form__check-box">
                        <input class="comment-form__check-box" type="checkbox" id="comment-form__check-box">
                        Remember me
                     </label>

                     <button class="comment-form__submit footer__form-submit" type="submit">Submit</button>
                  </form>
               </section>
            </div>
         </section>

         <?php include 'blog_nav.php' ?>
      </div>
   </div>
</main>

<?php include 'footer.php' ?>