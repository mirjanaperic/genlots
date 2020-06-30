<strong>Headings</strong>
<h1>Header one</h1>
<h2>Header two</h2>
<h3>Header three</h3>
<h4>Header four</h4>
<h5>Header five</h5>
<h6>Header six</h6>
<h2>Blockquotes</h2>
Single line blockquote:
<blockquote>Stay hungry. Stay foolish.</blockquote>
Multi line blockquote with a cite reference:
<blockquote cite="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote">The <strong>HTML <code>&lt;blockquote&gt;</code> Element</strong> (or <em>HTML Block Quotation Element</em>) indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation (see <a href="https://developer.mozilla.org/en-US/docs/HTML/Element/blockquote#Notes">Notes</a> for how to change it). A URL for the source of the quotation may be given using the <strong>cite</strong> attribute, while a text representation of the source can be given using the <a title="The HTML Citation Element &lt;cite&gt; represents a reference to a creative work. It must include the title of a work or a URL reference, which may be in an abbreviated form according to the conventions used for the addition of citation metadata." href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite"><code>&lt;cite&gt;</code></a> element.</blockquote>
<cite>multiple contributors</cite> - MDN HTML element reference - blockquote
<h2>Tables</h2>
<table>
    <thead>
    <tr>
        <th>Employee</th>
        <th>Salary</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th><a href="http://example.org/">John Doe</a></th>
        <td>$1</td>
        <td>Because that's all Steve Jobs needed for a salary.</td>
    </tr>
    <tr>
        <th><a href="http://example.org/">Jane Doe</a></th>
        <td>$100K</td>
        <td>For all the blogging she does.</td>
    </tr>
    <tr>
        <th><a href="http://example.org/">Fred Bloggs</a></th>
        <td>$100M</td>
        <td>Pictures are worth a thousand words, right? So Jane x 1,000.</td>
    </tr>
    <tr>
        <th><a href="http://example.org/">Jane Bloggs</a></th>
        <td>$100B</td>
        <td>With hair like that?! Enough said...</td>
    </tr>
    </tbody>
</table>
<h2>Definition Lists</h2>
<dl>
    <dt>Definition List Title</dt>
    <dd>Definition list division.</dd>
    <dt>Startup</dt>
    <dd>A startup company or startup is a company or temporary organization designed to search for a repeatable and scalable business model.</dd>
    <dt>#dowork</dt>
    <dd>Coined by Rob Dyrdek and his personal body guard Christopher "Big Black" Boykins, "Do Work" works as a self motivator, to motivating your friends.</dd>
    <dt>Do It Live</dt>
    <dd>I'll let Bill O'Reilly will <a title="We'll Do It Live" href="https://www.youtube.com/watch?v=O_HyZ5aW76c">explain</a> this one.</dd>
</dl>
<h2>Unordered Lists (Nested)</h2>
<ul>
    <li>List item one
        <ul>
            <li>List item one
                <ul>
                    <li>List item one</li>
                    <li>List item two</li>
                    <li>List item three</li>
                    <li>List item four</li>
                </ul>
            </li>
            <li>List item two</li>
            <li>List item three</li>
            <li>List item four</li>
        </ul>
    </li>
    <li>List item two</li>
    <li>List item three</li>
    <li>List item four</li>
</ul>
<h2>Ordered List (Nested)</h2>
<ol start="8">
    <li>List item one -start at 8
        <ol>
            <li>List item one
                <ol reversed="reversed">
                    <li>List item one -reversed attribute</li>
                    <li>List item two</li>
                    <li>List item three</li>
                    <li>List item four</li>
                </ol>
            </li>
            <li>List item two</li>
            <li>List item three</li>
            <li>List item four</li>
        </ol>
    </li>
    <li>List item two</li>
    <li>List item three</li>
    <li>List item four</li>
</ol>
<h2>HTML Tags</h2>
These supported tags come from the WordPress.com code <a title="Code" href="https://en.support.wordpress.com/code/">FAQ</a>.

<strong>Address Tag</strong>

<address>1 Infinite Loop
    Cupertino, CA 95014
    United States</address><strong>Anchor Tag (aka. Link)</strong>

This is an example of a <a title="WordPress Foundation" href="https://wordpressfoundation.org/">link</a>.

<strong>Abbreviation Tag</strong>

The abbreviation <abbr title="Seriously">srsly</abbr> stands for "seriously".

<strong>Acronym Tag (<em>deprecated in HTML5</em>)</strong>

The acronym <acronym title="For The Win">ftw</acronym> stands for "for the win".

<strong>Big Tag</strong> (<em>deprecated in HTML5</em>)

These tests are a <big>big</big> deal, but this tag is no longer supported in HTML5.

<strong>Cite Tag</strong>

"Code is poetry." --<cite>Automattic</cite>

<strong>Code Tag</strong>

This tag styles blocks of code.
<code>.post-title {
    margin: 0 0 5px;
    font-weight: bold;
    font-size: 38px;
    line-height: 1.2;
    and here's a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;
    }</code>
You will learn later on in these tests that word-wrap: break-word;will be your best friend.

<strong>Delete Tag</strong>

This tag will let you <del cite="deleted it">strike out text</del>, but this tag is <em>recommended</em> supported in HTML5 (use the <code>&lt;s&gt;</code> instead).

<strong>Emphasize Tag</strong>

The emphasize tag should <em>italicize</em> <i>text</i>.

<strong>Horizontal Rule Tag</strong>

<hr />

This sentence is following a <code>&lt;hr /&gt;</code> tag.

<strong>Insert Tag</strong>

This tag should denote <ins cite="inserted it">inserted</ins> text.

<strong>Keyboard Tag</strong>

This scarcely known tag emulates <kbd>keyboard text</kbd>, which is usually styled like the <code>&lt;code&gt;</code> tag.

<strong>Preformatted Tag</strong>

This tag is for preserving whitespace as typed, such as in poetry or ASCII art.
<h2>The Road Not Taken</h2>
<cite>Robert Frost</cite> Two roads diverged in a yellow wood, And sorry I could not travel both (\_/) And be one traveler, long I stood (='.'=) And looked down one as far as I could (")_(") To where it bent in the undergrowth; Then took the other, as just as fair, And having perhaps the better claim, |\_/| Because it was grassy and wanted wear; / @ @ \ Though as for that the passing there ( &gt; º &lt; ) Had worn them really about the same, `&gt;&gt;x&lt;&lt;´ / O \ And both that morning equally lay In leaves no step had trodden black. Oh, I kept the first for another day! Yet knowing how way leads on to way, I doubted if I should ever come back. I shall be telling this with a sigh Somewhere ages and ages hence: Two roads diverged in a wood, and I— I took the one less traveled by, And that has made all the difference. and here's a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;

<strong>Quote Tag</strong> for short, inline quotes

<q>Developers, developers, developers...</q> --Steve Ballmer

<strong>Strike Tag</strong> (<em>deprecated in HTML5</em>) and <strong>S Tag</strong>

This tag shows <span style="text-decoration: line-through;">strike-through</span> <s>text</s>.

<strong>Small Tag</strong>

This tag shows <small>smaller<small> text.</small></small>

<strong>Strong Tag</strong>

This tag shows <strong>bold<strong> text.</strong></strong>

<strong>Subscript Tag</strong>

Getting our science styling on with H<sub>2</sub>O, which should push the "2" down.

<strong>Superscript Tag</strong>

Still sticking with science and Albert Einstein's E = MC<sup>2</sup>, which should lift the 2 up.

<strong>Teletype Tag </strong>(<em>obsolete in HTML5</em>)

This rarely used tag emulates <tt>teletype text</tt>, which is usually styled like the <code>&lt;code&gt;</code> tag.

<strong>Underline Tag</strong> <em>deprecated in HTML 4, re-introduced in HTML5 with other semantics</em>

This tag shows <u>underlined text</u>.

<strong>Variable Tag</strong>

This allows you to denote <var>variables</var>.
<h3>Default</h3>
This is a paragraph. It should not have any alignment of any kind. It should just flow like you would normally expect. Nothing fancy. Just straight up text, free flowing, with love. Completely neutral and not picking a side or sitting on the fence. It just is. It just freaking is. It likes where it is. It does not feel compelled to pick a side. Leave him be. It will just be better that way. Trust me.
<h3>Left Align</h3>
<p style="text-align: left;">This is a paragraph. It is left aligned. Because of this, it is a bit more liberal in it's views. It's favorite color is green. Left align tends to be more eco-friendly, but it provides no concrete evidence that it really is. Even though it likes share the wealth evenly, it leaves the equal distribution up to justified alignment.</p>

<h3>Center Align</h3>
<p style="text-align: center;">This is a paragraph. It is center aligned. Center is, but nature, a fence sitter. A flip flopper. It has a difficult time making up its mind. It wants to pick a side. Really, it does. It has the best intentions, but it tends to complicate matters more than help. The best you can do is try to win it over and hope for the best. I hear center align does take bribes.</p>

<h3>Right Align</h3>
<p style="text-align: right;">This is a paragraph. It is right aligned. It is a bit more conservative in it's views. It's prefers to not be told what to do or how to do it. Right align totally owns a slew of guns and loves to head to the range for some practice. Which is cool and all. I mean, it's a pretty good shot from at least four or five football fields away. Dead on. So boss.</p>

<h3>Justify Align</h3>
<p style="text-align: justify;">This is a paragraph. It is justify aligned. It gets really mad when people associate it with Justin Timberlake. Typically, justified is pretty straight laced. It likes everything to be in it's place and not all cattywampus like the rest of the aligns. I am not saying that makes it better than the rest of the aligns, but it does tend to put off more of an elitist attitude.</p>