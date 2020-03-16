    <!-- Quick Contact Form -->
    <div class="quick-contact-form border-colored">
        <h5 class="uppercase t-center extrabold">Drop us a message</h5>
        <p class="t-center normal">
        You're in the right place! Just drop us a message. How can we help?
        </p>
        <!-- Contact Form -->
        <form
        class="quick_form"
        name="quick_form"
        method="post"
        action="{{ url('message-us') }}"
        >
        {!! csrf_field() !!}
        <!-- Name -->
        <input
            type="text"
            name="name"
            id="qname"
            required
            placeholder="Name"
            class="no-mt"
        />
        <!-- Email -->
        <input
            type="email"
            name="email"
            id="qemail"
            required
            placeholder="E-Mail"
        />
        <!-- Message -->
        <textarea
            name="message"
            id="qmessage"
            required
            placeholder="Message"
        ></textarea>
        <!-- Send Button -->
        <button
            type="submit"
            id="qsubmit"
            class="bg-colored click-effect white qdr-hover-6 uppercase extrabold"
        >
            Send
        </button>
        <!-- End Send Button -->
        </form>
        <!-- End Form -->
        <a
        href="{{ url('contact-us') }}"
        target="_blank"
        class="inline-block colored-hover uppercase extrabold h6 no-pm qdr-hover-5"
        >Or see contact page</a
        >
    </div>
      <!-- Contact us button -->
    <a href="#" class="drop-msg click-effect dark-effect"
    ><i class="fa fa-envelope-o"></i
    ></a>
    <!-- Back To Top -->
    <a id="back-to-top" href="#top"><i class="fa fa-angle-up"></i></a>
  
      <!-- SEARCH FORM FOR NAV -->
    <div class="fs-searchform">
        <form
            id="fs-searchform"
            class="v-center container"
            action="pages-search-results.html"
            method="get"
        >
            <!-- Input -->
            <input
            type="search"
            name="q"
            id="q"
            placeholder="Search on website.com"
            autocomplete="off"
            />
            <!-- Search Button -->
            <button type="submit">
            <i class="fa fa-search"></i>
            </button>
            <div class="recommended font-14 normal">
            <h5 class="rcm-title">Recommend Links;</h5>
            <a href="demo-antares.html">Quadra, Antares version</a>
            <a href="demo-athena.html">Beautiful Athena demo</a>
            <a href="elements-all.html">Awesome Quadra Elements</a>
            <a href="demo-feronia.html">Why i will use the Quadra?</a>
            <a href="demo-sun.html">Checkout the Sun demo</a>
            <a href="index.html">See 700+ templates</a>
            </div>
        </form>
        <div class="form-bg"></div>
    </div>
      <!-- END SEARCH FORM -->
  
      <!-- Messages for contact form -->
    <div id="error_message" class="clearfix">
        <i class="fa fa-warning"></i>
        <span
            >Validation error occured. Please enter the fields and submit it
            again.</span
        >
    </div>
      <!-- Submit Message -->
    <div id="submit_message" class="clearfix">
        <i class="fa fa-check"></i>
        <span>Thank You ! Your email has been delivered.</span>
    </div>