<?php 
/* Template Name: Components */
get_header();?> 

<div class="tabs-wrapper">
  <div class="row white z-depth-1">
    <div class="container">
      <ul class="tabs">
        <li class="tab"><a href="#tab1">Typography</a></li>
        <li class="tab"><a href="#tab2">Grid</a></li>
        <li class="tab"><a href="#tab4">Forms</a></li>
        <li class="tab"><a href="#tab5">Buttons</a></li>
        <li class="tab"><a href="#tab6">Navbar</a></li>
        <li class="tab"><a href="#tab7">Content</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div id="tab1" class="section row">

    <div class="col hide-on-small-only m3 l2">
      <div style="height: 1px;">
        <ul class="table-of-contents">
          <li><a href="#headers">Headers</a></li>
          <li><a href="#flow">Flow Text</a></li>
        </ul>
      </div>
    </div>

    <div class="col s12 m9 l10">
      <div id="headers" class="scrollspy">
        <h2 class="header">Typography</h2>
        <h4 class="light">Headers</h4>
        <div class="row">
          <div class="col s12">
            <p>We provide some basic styling on header tags. In the example on the right, you can see the difference in sizes between the 6 header tags</p>
            <div class="preview">
              <h1>Heading h1</h1>
              <h2>Heading h2</h2>
              <h3>Heading h3</h3>
              <h4>Heading h4</h4>
              <h5>Heading h5</h5>
              <h6>Heading h6</h6>
            </div>
          </div>
        </div>
      </div>

      <div id="flow" class="scrollspy">
        <h4 class="light">Flow Text</h4>
        <p>
        One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.
          </p>
        <p>
          To see Flow Text in action, resize your browser and watch the size of the text below change!
        </p>
        <p>To activate this, just add the class "flow-text" to a tag, see the code and demo below for a feel of how this works.</p>
        <div class="row">
        <pre><code class="language-markup col s12">
&lt;p class="flow-text">I am Flow Text&lt;/p>
        </code></pre>
        </div>
        <p class="flow-text">Post-ironic keffiyeh bitters Banksy street art yr, ennui flexitarian organic bespoke lomo readymade.   Schlitz single-origin coffee Wes Anderson XOXO, literally whatever cliche lo-fi deep v pug beard. Blog whatever banh mi   wayfarers, tousled roof party try-hard gentrify aesthetic ennui 90's Bushwick. Master cleanse American Apparel PBR&B  letterpress, mumblecore fingerstache tousled Thundercats hashtag Wes Anderson quinoa. Yr Brooklyn messenger bag scenester, wolf beard sustainable chia cred sriracha flannel Truffaut Tonx. Butcher 3 wolf moon Vice Banksy, gentrify sartorial XOXO farm-to-table PBR gastropub pop-up. YOLO plaid mustache small batch flannel chambray.

        Typewriter swag Marfa forage, biodiesel Cosby sweater pork belly McSweeney's fap kale chips ugh. Cornhole hoodie chambray   Truffaut, you probably haven't heard of them next level flannel. Plaid cred cray, next level trust fund pork belly vegan  gastropub Blue Bottle artisan. Before they sold out ugh stumptown, bitters wolf banjo YOLO forage direct trade Marfa kitsch try- hard mixtape vegan small batch. Truffaut artisan deep v pickled biodiesel, chambray synth pop-up bicycle rights squid gluten-free mlkshk Godard photo booth roof party. DIY bicycle rights Marfa actually, Blue Bottle normcore Pitchfork organic tofu authentic Austin ennui post-ironic. Synth gastropub church-key, small batch art party 3 wolf moon disrupt cornhole quinoa Thundercats biodiesel Williamsburg Schlitz.</p>
      </div>


    </div>
  </div>
  <div id="tab2" class="section">
    <div class="row">
<!--      table of contents-->
      <div class="col hide-on-small-only m3 l2">
        <div style="height: 1px;">
          <ul class="table-of-contents">
            <li><a href="#grid">Grid</a></li>
            <li><a href="#offset">Offsets</a></li>
          </ul>
        </div>
      </div>

      <div class="col s12 m9 l10">
      <div id="grid" class="scrollspy">
        <h2 class="header">Grids</h2>
        <p class="caption">
          We are using a standard 12 column fluid responsive grid system. It comes with 3 standard screen size media queries where you  can alter the columns.</p>
        <div class="row">
          <div class="col grid-example s12"><p>s12</p></div>
          <div class="col grid-example s12 m3"><p>s12 m3</p></div>
          <div class="col grid-example s12 m6"><p>s12 m6</p></div>
          <div class="col grid-example s12 m3"><p>s12 m3</p></div>
          <div class="col grid-example s12 m6 l3"><p>s12 m6 l3</p></div>
          <div class="col grid-example s12 m6 l3"><p>s12 m6 l3</p></div>
          <div class="col grid-example s12 m6 l3"><p>s12 m6 l3</p></div>
          <div class="col grid-example s12 m6 l3"><p>s12 m6 l3</p></div>
        </div>
        <div class="row">
          <pre><code class="language-markup col s12">
    &lt;div class="row">
    &lt;div class="col s12">&lt;p>s12&lt;/p>&lt;/div>
    &lt;div class="col s12 m3">&lt;p>s12 m3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6">&lt;p>s12 m6&lt;/p>&lt;/div>
    &lt;div class="col s12 m3">&lt;p>s12 m3&lt;/p>&lt;/div>
    &lt;/div>
    &lt;div class="row">
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;/div>
          </code></pre>
        </div>
      </div>

    <div id="offset" class="scrollspy">
      <h4 class="light">Offsets</h4>
      <p>You can use offsets to make smaller sized columns without needing to fill in the empty space.</p>

      <div class="row">
        <div class="col grid-example s8 offset-s2"><p>s8 offset-s2</p></div>
        <div class="col grid-example s8 offset-s2 m8 offset-m4 l10 offset-l2"><p>s8 offset-s2 m8 offset-m4 l10 offset-l2</p></div>
      </div>

      <div class="row">
        <pre><code class="language-markup col s12">
  &lt;div class="col s8 offset-s2">
    &lt;p>s8 offset-s2&lt;/p>
  &lt;/div>
  &lt;div class="col s6 offset-s6 m8 offset-m4 l10 offset-l2">
    &lt;p>s8 offset-s2 m8 offset-m4 l10 offset-l2&lt;/p>
  &lt;/div>
        </code></pre>
      </div>
    </div>
    </div>
  </div>

  </div>

<!--  Form Elements  -->
  <div id="tab4" class="section row">
    <div class="col hide-on-small-only m3 l2">
      <div style="height: 1px;">
        <ul class="table-of-contents">
          <li><a href="#input">Input Fields</a></li>
          <li><a href="#textarea">Textareas</a></li>
          <li><a href="#select">Select</a></li>
          <li><a href="#radio">Radio Buttons</a></li>
          <li><a href="#checkbox">Checkboxes</a></li>
          <li><a href="#range">Range</a></li>
        </ul>
      </div>
    </div>
    <div class="col s12 m9 l10">

      <div id="input" class="scrollspy">
        <h2 class="header">Forms</h2>

        <h4 class= "header light">Input fields</h4>
        <p>Text fields allow user input. The border should light up simply and clearly indicating which field the user is currently   editing.</p>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" required>
                <label for="first_name">First Name</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" required>
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="username" type="text" required>
                <label for="username">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password" required>
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" required>
                <label for="email">Email</label>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <pre><code class="language-markup col s12">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s6">
          &lt;input id="first_name" type="text" required>
          &lt;label for="first_name">First Name&lt;/label>
        &lt;/div>
        &lt;div class="input-field col s6">
          &lt;input id="last_name" type="text" required>
          &lt;label for="last_name">Last Name&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="username" type="text" required>
          &lt;label for="username">Username&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="password" type="password" required>
          &lt;label for="password">Password&lt;/label>
        &lt;/div>
      &lt;/div>
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;input id="email" type="email" required>
          &lt;label for="email">Email&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
          </code></pre>
        </div>
      </div>
      <div id="textarea" class="scrollspy">
        <h4 class= "header light">Textarea</h4>
        <p>Textareas allow larger expandable user input. The border should light up simply and clearly indicating which field the user is currently editing. </p>
        <p><strong>Textareas will auto resize to the text inside.</strong></p>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <textarea></textarea>                
                <label>Textarea</label>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <pre><code class="language-markup col s12">
  &lt;div class="row">
    &lt;form class="col s12">
      &lt;div class="row">
        &lt;div class="input-field col s12">
          &lt;textarea>&lt;/textarea>                
          &lt;label>Textarea&lt;/label>
        &lt;/div>
      &lt;/div>
    &lt;/form>
  &lt;/div>
          </code></pre>
        </div>
      </div>
      <div id="select" class="scrollspy">
        <h4 class= "header light">Select</h4>
        <p> Select allows user input through specified options. </p>
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="input-field col s12">
                <br><br><br>
                <p>You can add the class <code class="language-markup">disabled</code> to get the browser default.</p>
                <select class="disabled">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <pre><code class="language-markup col s12">
  &lt;select>
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>

  &lt;select class="disabled">
    &lt;option value="" disabled selected>Choose your option&lt;/option>
    &lt;option value="1">Option 1&lt;/option>
    &lt;option value="2">Option 2&lt;/option>
    &lt;option value="3">Option 3&lt;/option>
  &lt;/select>
          </code></pre>
        </div>
      </div>
      <div id="radio" class="scrollspy">

        <h4 class= "header light">Radio Buttons</h4>
        <p>Radio Buttons are used when the user must make only one selection out of a group of items</p>
        <div class="row">
          <form action="#">
            <p>
              <input name="group1" type="radio" id="test1" />
              <label for="test1">Red</label>
            </p>
            <p>
              <input name="group1" type="radio" id="test2" />
              <label for="test2">Yellow</label>
            </p>
            <p>
              <input name="group1" type="radio" id="test3"  />
              <label for="test3">Green</label>
            </p>
              <p>
                <input name="group1" type="radio" id="test4" disabled="disabled" />
                <label for="test4">Brown</label>
            </p>
          </form>
        </div>
        <div class="row">
          <p>Add radio buttons to a group by adding the name attribute along with the same corresponding value for each of the radio  buttons in the group. Create disabled radio buttons by adding the disabled attribute as shown below.</p>
        </div>
        <div class="row">
          <pre><code class="language-markup col s12">
      &lt;form action="#">
        &lt;p>
          &lt;input name="group1" type="radio" id="test1" />
          &lt;label for="test1">Red&lt;/label>
        &lt;/p>
        &lt;p>
          &lt;input name="group1" type="radio" id="test2" />
          &lt;label for="test2">Yellow&lt;/label>
        &lt;/p>
        &lt;p>
          &lt;input name="group1" type="radio" id="test3"  />
          &lt;label for="test3">Green&lt;/label>
        &lt;/p>
          &lt;p>
            &lt;input name="group1" type="radio" id="test4" disabled="disabled" />
            &lt;label for="test4">Brown&lt;/label>
        &lt;/p>
      &lt;/form>
          </code></pre>
        </div>
      </div>

      <div id="checkbox" class="scrollspy">
        <h4 class="header light">Checkboxes</h4>
        <p>Checkboxes</p>
        <div class="row">
          <form action="#">
            <p>
              <input type="checkbox" id="test5" />
              <label for="test5">Red</label>
            </p>
            <p>
              <input type="checkbox" id="test6" checked="checked" />
              <label for="test6">Yellow</label>
            </p>
            <p>
              <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
              <label for="test7">Green</label>
            </p>
              <p>
                <input type="checkbox" id="test8" disabled="disabled" />
                <label for="test8">Brown</label>
            </p>
          </form>
        </div>
        <div class="row" >
          <pre><code class="language-markup col s12">
    &lt;form action="#">
      &lt;p>
        &lt;input type="checkbox" id="test5" />
        &lt;label for="test5">Red&lt;/label>
      &lt;/p>
      &lt;p>
        &lt;input type="checkbox" id="test6" checked="checked" />
        &lt;label for="test6">Yellow&lt;/label>
      &lt;/p>
      &lt;p>
        &lt;input type="checkbox" id="test7" checked="checked" disabled="disabled" />
        &lt;label for="test7">Green&lt;/label>
      &lt;/p>
        &lt;p>
          &lt;input type="checkbox" id="test8" disabled="disabled" />
          &lt;label for="test8">Brown&lt;/label>
      &lt;/p>
    &lt;/form>
          </code></pre>
        </div>
      </div>

      <div id="range" class="scrollspy">
        <h4 class="header light">Range</h4>
        <p>Add a range slider for values with a wide range. This one is set to be a number between 0 and 100.</p>
        <div class="row">
          <form action="#">
            <p class="range-field">
              <input type="range" name="points" min="0" max="100">
            </p>
          </form>
        </div>
        <div class="row" >
          <pre><code class="language-markup col s12">
    &lt;form action="#">
      &lt;p class="range-field">
        &lt;input type="range" id="test5" />
        &lt;label for="test5">Red&lt;/label>
      &lt;/p>
    &lt;/form>
          </code></pre>
        </div>
      </div>

    </div>
  </div>

<!--  Buttons  -->
  <div id="tab5" class="section row">
    <div class="col hide-on-small-only m3 l2">
      <div style="height: 1px;">
        <ul class="table-of-contents">
          <li><a href="#raised">Raised</a></li>
          <li><a href="#floating">Floating</a></li>
          <li><a href="#flat">Flat</a></li>
          <li><a href="#large">Large</a></li>
          <li><a href="#disabled">Disabled</a></li>
        </ul>
      </div>
    </div>
    <div class="col s12 m9 l10">
      <div id="raised" class="scrollspy">
        <div class="row">
          <h2 class="header">Buttons</h2>
          <p class="caption">
          There are 3 main button types described in material design. The raised button is a standard button that signify actions and seek to give depth to a mostly flat page. The floating circular action button is meant for very important functions. Flat buttons are usually used within elements that already have depth like cards or modals.
          </p>
        </div>
        <div class="row">
          <h4 class="header">Raised</h4>
          <a class="waves-effect waves-light btn">button</a>
          <a class="waves-effect waves-light btn"><i class="mdi-file-cloud"></i>button</a>
          <a class="waves-effect waves-light btn"><i class="mdi-file-cloud right"></i>button</a>
          <pre><code class="language-markup col s12">
&lt;a href="" class="waves-effect waves-light btn">Stuff&lt;/a>
&lt;a class="waves-effect waves-light btn">&lt;i class="mdi-file-cloud">&lt;/i>button&lt;/a>
&lt;a class="waves-effect waves-light btn">&lt;i class="mdi-file-cloud right">&lt;/i>button&lt;/a>
          </code></pre>
        </div>
      </div>
      <div id="floating" class="scrollspy">
        <div class="row">
          <h4 class="header">Floating</h4>
          <a class="btn-floating"><i class="mdi-content-add"></i></a>
          <pre><code class="language-markup col s12">
&lt;a href="" class="button floating">&lt;i class="mdi-content-add">&lt;/i>&lt;/a>
          </code></pre>
        </div>
      </div>
      <div id="flat" class="scrollspy">
        <div class="row">
          <h4 class="header">Flat</h4>
          <a class="waves-effect waves-button btn-flat">Button</a>
          <pre><code class="language-markup col s12">
&lt;a href="" class="waves-effect button flat">Button&lt;/a>
          </code></pre>
        </div>
      </div>
      <div id="large" class="scrollspy">
        <h3 class="header">Additional Styles</h3>  
        <div class="row">
          <h4 class="header">Large</h4>
          <p>This button has a larger height for buttons that need more attention.</p>
          <a class="waves-effect waves-light btn-large">Button</a>
          <a class="waves-effect waves-light btn-large"><i class="mdi-file-cloud"></i>button</a>
          <a class="waves-effect waves-light btn-large"><i class="mdi-file-cloud right"></i>button</a>
          <pre><code class="language-markup col s12">
&lt;a href="" class="waves-effect waves-light btn-large">Button&lt;/a>
&lt;a class="waves-effect waves-light btn-large">&lt;i class="mdi-file-cloud">&lt;/i>button&lt;/a>
&lt;a class="waves-effect waves-light btn-large">&lt;i class="mdi-file-cloud right">&lt;/i>button&lt;/a>
          </code></pre>
        </div>
      </div>
      <div id="disabled" class="scrollspy">
        <div class="row">
          <h4 class="header">Disabled</h4>
          <p>This style can be applied to all button types</p>
          <a class="btn-large disabled">Button</a>
          <a class="btn disabled">Button</a>
          <a class="btn-flat disabled">Button</a>
          <a class="btn-floating disabled"><i class="mdi-content-add"></i></a>
          <pre><code class="language-markup col s12">
&lt;a class="btn-large disabled">Button&lt;/a>
&lt;a class="btn disabled">Button&lt;/a>
&lt;a class="btn-flat disabled">Button&lt;/a>
&lt;a class="btn-floating disabled">&lt;i class="mdi-content-add">&lt;/i>&lt;/a>
          </code></pre>
        </div>
      </div>
    </div>
  </div>

  <div id="tab6" class="section">
<!--   Navbar Section  -->
    <div class="row">
      <h2 class="header">Navbar</h2>
      <p class="caption">The navbar is fully contained by an HTML5 Nav tag. Inside a recommended container div, there are 2 main parts of the navbar. A logo or brand link, and the navigations links. You can align these links to the left or right.
      </p>
      <h4 class="header">Right Aligned Links</h4>

      <nav>
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="#!" class="brand-logo">Logo</a>
            <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
            <ul class="right side-nav">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="components.html">Components</a></li>
              <li><a href="javascript.html">JavaScript</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="row">
      <pre><code class="language-markup col s12">
&lt;nav>
  &lt;div class="nav-wrapper">
    &lt;a href="#" class="brand-logo">Logo&lt;/a>
    &lt;ul id="nav-mobile" class="right side-nav">
      &lt;li>&lt;a href="sass.html">Sass&lt;/a>&lt;/li>
      &lt;li>&lt;a href="components.html">Components&lt;/a>&lt;/li>
      &lt;li>&lt;a href="javascript.html">JavaScript&lt;/a>&lt;/li>
    &lt;/ul>
    &lt;a class="button-collapse" href="#" data-activates="nav-mobile">&lt;i class="mdi-navigation-menu">&lt;/i>&lt;/a>
  &lt;/div>
&lt;/nav>
      </code></pre>
    </div>

  <div class="row">
    <h4 class="header">Left Aligned Links</h4>
    <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="#!" class="brand-logo right">Logo</a>
          <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
          <ul class="left side-nav">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="components.html">Components</a></li>
            <li><a href="javascript.html">JavaScript</a></li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
    <div class="row">
      <pre><code class="language-markup col s12">
&lt;nav>
  &lt;div class="nav-wrapper">
    &lt;a href="#" class="brand-logo right">Logo&lt;/a>
    &lt;ul id="nav-mobile" class="left side-nav">
      &lt;li>&lt;a href="sass.html">Sass&lt;/a>&lt;/li>
      &lt;li>&lt;a href="components.html">Components&lt;/a>&lt;/li>
      &lt;li>&lt;a href="javascript.html">JavaScript&lt;/a>&lt;/li>
    &lt;/ul>
    &lt;a class="button-collapse" href="#" data-activates="nav-mobile">&lt;i class="mdi-navigation-menu">&lt;/i>&lt;/a>
  &lt;/div>
&lt;/nav>
      </code></pre>
    <br>
    <div class="col s12">
      <h4 class="header">Mobile Collapse Button</h4>
      <p>If you already included the code for the button collapse as we did in the examples above, all you have to do now is place this code in your page's <code class="language-javascript">$( document ).ready(function(){})</code> code. This example below assumes you have not modified the classes in the above example. In the case that you have, just change the jQuery selector in the line below to match it.</p>
      <pre><code class="language-javascript">
$(".button-collapse").sideNav();
      </code></pre>
    </div>

    </div>
  </div>
  
<!--  Content tab  -->
  <div id="tab7" class="section">
    <div class="row">
      
    <div class="col hide-on-small-only m3 l2">
      <div style="height: 1px;">
        <ul class="table-of-contents">
          <li><a href="#cards">Cards</a></li>
          <li><a href="#collections">Collections</a></li>
          <li><a href="#tables">Tables</a></li>
        </ul>
      </div>
    </div>
    
    <div class=" col s12 m9 l10">
<!--    Cards Section-->
    <div id="cards" class="scrollspy">
      <div class="row">
          <h2 class="header">Cards</h2>
          <p class="caption">Cards are a convenient means of displaying content composed of different types of objects. They’re also well-suited for presenting similar objects whose size or supported actions can vary considerably, like photos with captions of variable length.</p>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <div class="card cyan">
          <div class="card-content">
            <h1>Card Title</h1>
            <p>This is sample content</p>
          </div>  
          <div class="card-footer">
            <p>Footer</p>
            <p>Sample content</p>
            <a class="card-action" href="#">This is a link</a>
            <a class='card-action' href='#'>This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="card">
          <div class="card-content">
            <img src="http://unsplash.it/340/220">
            <h1>Card Title</h1>
            <p>This is sample content</p>
          </div>  
          <div class="card-footer">
            <p>Footer</p>
            <p>Sample content</p>
            <a class='card-action' href='#'>This is a link</a>
            <a class='card-action' href='#'>This is a link</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <pre><code class="language-markup col s12">
  &lt;div class="col s12 m6">
      &lt;div class="card cyan">
          &lt;div class="card-content">
              &lt;h1>Card Title&lt;/h1>
              &lt;p>This is sample content&lt;/p>
          &lt;/div> 
          &lt;div class="card-footer">
              &lt;p>Footer&lt;/p>
              &lt;p>Sample content&lt;/p>
              &lt;p>Sample content&lt;/p>
              &lt;a class="card-action" href="#">This is a link&lt;/a>
              &lt;a class="card-action" href="#">This is a link&lt;/a>
          &lt;/div>
      &lt;/div>
  &lt;/div>

  &lt;div class="col s12 m6">
    &lt;div class="card">
      &lt;div class="card-content">
        &lt;img src="images/sample-1.jpg">
        &lt;h1>Card Title&lt;/h1>
        &lt;p>This is sample content&lt;/p>
      &lt;/div>  
      &lt;div class="card-footer">
        &lt;p>Footer&lt;/p>
        &lt;p>Sample content&lt;/p>
        &lt;p>Sample content&lt;/p>
        &lt;a class="card-action" href="#">This is a link&lt;/a>
        &lt;a class="card-action" href="#">This is a link&lt;/a>
      &lt;/div>
    &lt;/div>
  &lt;/div>
      </code></pre>
    </div>
  </div>
  
  <!--  Collections Section  -->
  <div id="collections" class="scrollspy">
    
    <div class="row">
      <div class="col s12">
        <h2 class="header">Collections</h2>
        <p class="caption">Collections allow you to group list objects together.</p>

        <div id="basic-collection" class="scrollspy">
          <h4 class="light">Basic</h4>
          <ul class="collection">
            <li class="collection-item">Alvin</li>
            <li class="collection-item">Alvin</li>
            <li class="collection-item">Alvin</li>
            <li class="collection-item">Alvin</li>
          </ul>
          <pre><code class="language-markup">
  &lt;ul class="collection">
    &lt;li class="collection-item">Alvin&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
  &lt;/ul>
          </code></pre>
          </div>
        <br>

        <div id="basic-collection-2" class="scrollspy">
        <h4 class="light">Basic with different HTML structure</h4>
        <div class="collection">
          <a href="#!" class="collection-item">Alvin</a>
          <a href="#!" class="collection-item active">Alvin</a>
          <a href="#!" class="collection-item">Alvin</a>
          <a href="#!" class="collection-item">Alvin</a>
        </div>
        <pre><code class="language-markup">
  &lt;div class="collection">
    &lt;a href="#!" class="collection-item">Alvin&lt;/a>
    &lt;a href="#!" class="collection-item active">Alvin&lt;/a>
    &lt;a href="#!" class="collection-item">Alvin&lt;/a>
    &lt;a href="#!" class="collection-item">Alvin&lt;/a>
  &lt;/div>
        </code></pre>
        </div>
        <br>

        <div id="headers-collection" class="scrollspy">
        <h4 class="light">Headers</h4>
        <ul class="collection with-header">
          <li class="collection-header"><h4>First Names</h4></li>
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
          <li class="collection-item">Alvin</li>
        </ul>
        <pre><code class="language-markup">
  &lt;ul class="collection with-header">
    &lt;li class="collection-header">&lt;h4>First Names&lt;/h4>&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
    &lt;li class="collection-item">Alvin&lt;/li>
  &lt;/ul>
        </code></pre>
        </div>
        <br>

        <div id="secondary-content-collection" class="scrollspy">
        <h4 class="light">Secondary content</h4>
        <ul class="collection with-header">
          <li class="collection-header"><h4>First Names</h4></li>
          <li class="collection-item">Alvin<a href="#!" class="secondary-content"><i class="secondary-content mdi-content-send"></i></a></li>
          <li class="collection-item">Alvin<a href="#!" class="secondary-content"><i class="mdi-content-send"></i></a></li>
          <li class="collection-item">Alvin<a href="#!" class="secondary-content"><i class="mdi-content-send"></i></a></li>
          <li class="collection-item">Alvin<a href="#!" class="secondary-content"><i class="mdi-content-send"></i></a></li>
        </ul>
        <pre><code class="language-markup">
  &lt;ul class="collection with-header">
    &lt;li class="collection-header">&lt;h4>First Names&lt;/h4>&lt;/li>
    &lt;li class="collection-item">&lt;div>Alvin&lt;a href="#!" class="secondary-content">&lt;i class="secondary-content mdi-content-send">&lt;/i>&lt;/a>&lt;/div>&lt;/li>
    &lt;li class="collection-item">&lt;div>Alvin&lt;a href="#!" class="secondary-content">&lt;i class="mdi-content-send">&lt;/i>&lt;/a>&lt;/div>&lt;/li>
    &lt;li class="collection-item">&lt;div>Alvin&lt;a href="#!" class="secondary-content">&lt;i class="mdi-content-send">&lt;/i>&lt;/a>&lt;/div>&lt;/li>
    &lt;li class="collection-item">&lt;div>Alvin&lt;a href="#!" class="secondary-content">&lt;i class="mdi-content-send">&lt;/i>&lt;/a>&lt;/div>&lt;/li>
  &lt;/ul>
        </code></pre>
        </div>
      </div>
    </div>
  </div>
      
<!--  Tables Section-->
  <div id="tables" class="scrollspy">
    <div class="row">
      <h2 class="header">Tables</h2>
      <p class="caption">Tables are a nice way to organize a lot of data. We provide a few utility classes to help you style your table as easily as possible. In addition, to improve mobile experience, all tables on mobile-screen widths are centered automatically.</p>
      <div class="row">
      <div class="col s12">
        <h4 class="light">Borderless Table</h4>
        <p>Tables are borderless by default.</p>
        <table>
          <thead>
            <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
          </thead
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      
      <br>
      
      <div class="row">
      <div class="col s12">
        <h4 class="light">Bordered Table</h4>
        <p>Add <code class="language-markup">class="bordered"</code> for a bordered table</p>
        <table class="bordered">
          <thead>
            <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
          </thead
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      
      <br>
      
      <div class="row">
      <div class="col s12">
        <h4 class="light">Striped Table</h4>
        <p>Add <code class="language-markup">class="striped"</code> for a striped table</p>
        <table class="striped">
          <thead>
            <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
          </thead
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      
      <br>
      
      <div class="row">
      <div class="col s12">
        <h4 class="light">Hoverable Table</h4>
        <p>Add <code class="language-markup">class="hoverable"</code> for a hoverable table</p>
        <table class="hoverable">
          <thead>
            <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
          </thead
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      
      <div class="row">
      <div class="col s12">
        <h4 class="light">Centered Table</h4>
        <p>Add <code class="language-markup">class="cetered"</code> to center align all the text in the table</p>
        <table class="centered">
          <thead>
            <tr>
                <th data-field="id">Name</th>
                <th data-field="name">Item Name</th>
                <th data-field="price">Item Price</th>
            </tr>
          </thead
          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      
    </div>
  </div>
  <!--  End Tables Section  -->
  </div>
      
  </div>
  </div>

  
  
    </div>
  </div>
</div>
<?php get_footer();?>

