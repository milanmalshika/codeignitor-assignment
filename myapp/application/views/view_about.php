<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.51.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
</head>

<body>
    <nav class="navbar nav-bar-dark bg-danger navbar-expand-md">
    <a class="navbar-brand" href="<?php echo base_url('index.php/About/aboutus') ?>">Heaven of Books</a>
    <a class="navbar-brand" href="<?php echo base_url('index.php/About/aboutus') ?>"><img src="<?php echo base_url('images/logo.jpg'); ?>" class="logo"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
            data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo base_url('index.php/About/aboutus'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Registration/displaydata'); ?>">Book List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Registration/savedata'); ?>">Insert Book</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="page-header header container-fluid">
        <div class="overlay">
            <div class="description">
                <h1>Welcome to the Heaven of Books!</h1>
                    <p>A book is a medium for recording information in the form of 
                    writing or images, typically composed of many pages (made of
                    papyrus, parchment, vellum, or paper) bound together and protected
                    by a cover. The technical term for this physical arrangement is 
                    codex (plural, codices). In the history of hand-held physical 
                    supports for extended written compositions or records, the codex
                    replaces its immediate predecessor, the scroll. A single sheet in
                    a codex is a leaf, and each side of a leaf is a page.</p>
                    <!-- <button class="btn btn-outline-danger btn-lg">Read More</button> -->
            </div> 
        </div>
    </header>

    <div class="container-fluid features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Novel</h3>
                <img src="<?php echo base_url('images/novel.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>A novel is a relatively long work of narrative fiction, normally 
                written in prose form, and which is typically published as a book. 
                The present English word for a long work of prose fiction derives
                from the Italian novella for "new", "news", or "short story of something
                new", itself from the Latin novella, a singular noun use of the neuter
                plural of novellus, diminutive of novus, meaning "new".Some novelists, 
                including Nathaniel Hawthorne, Herman Melville, Ann Radcliffe, 
                John Cowper Powys, preferred the term "romance" to describe their novels.
                According to Margaret Doody, the novel constitutes "a continuous and comprehensive
                history of about two thousand years", with its origins in the Ancient Greek and 
                Roman novel, in Chivalric romance, and in the tradition of the Italian renaissance novella.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">   
                <h3 class="feature-title">ShortStories</h3>
                <img src="<?php echo base_url('images/short.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>A short story is a piece of prose fiction that typically can be read in one
                sitting and focuses on a self-contained incident or series of linked incidents,
                with the intent of evoking a "single effect" or mood. The short story is a crafted
                form in its own right. Short stories make use of plot, resonance, and other dynamic
                components as in a novel, but typically to a lesser degree. While the short story
                is largely distinct from the novel or novella/short novel, authors generally draw
                from a common pool of literary techniques. Short story writers may define their works 
                as part of the artistic and personal expression of the form. They may also attempt to
                resist categorization by genre and fixed formation.Short stories have deep roots and
                the power of short fiction has been recognized in modern society for hundreds of years.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Science</h3>
                <img src="<?php echo base_url('images/science.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>Science fiction (sometimes shortened to sci-fi or SF) is a genre of speculative fiction 
                that typically deals with imaginative and futuristic concepts such as advanced science and 
                technology, space exploration, time travel, parallel universes, and extraterrestrial life. 
                It has been called the "literature of ideas", and often explores the potential consequences 
                of scientific, social, and technological innovations. Science fiction, whose roots go back to 
                ancient times, is related to fantasy, horror, and superhero fiction, and contains many subgenres. 
                However its exact definition has long been disputed among authors, critics, and scholars.
                Science fiction literature, film, television, and other media have become popular and influential 
                over much of the world. Besides providing entertainment, it can also criticize present-day society,
                and is often said to inspire a "sense of wonder".</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Educational</h3>
                <img src="<?php echo base_url('images/educational.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>Education is something we’re deeply passionate about, but the fact remains that today’s
                dominant formal education model is a broken system based on antiquated paradigms.
                While much has been said and written about education reform over the past couple of 
                years, the issue and the public discourse around it are hardly new phenomena. 
                Today, we round up the most compelling and visionary reading on reinventing education
                from the past century.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">   
                <h3 class="feature-title">Religious</h3>
                <img src="<?php echo base_url('images/religious.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>What are the 5 religious books?
                    Christianity, New Testament.
                    Islam, The Holy Quran.
                    Hinduism, has many holy books, but most popular is Shreemad Bhagavad Gita, Upanishads and Veda.
                    Buddhism, Tripitakas.
                    Sikhism, Guru Granth Sahib.
                    Judaism, has two religious books. ...
                    Baha'ism, Kitáb-i-Aqdas</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Dictionaries</h3>
                <img src="<?php echo base_url('images/dictionary.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>A dictionary is a listing of words in one or more specific languages, often arranged alphabetically
                (or by radical and stroke for ideographic languages), which may include information on definitions,
                usage, etymologies, pronunciations, translation, etc.[1] or a book of words in one language with
                their equivalents in another, sometimes known as a lexicon.[1] It is a lexicographical reference
                that shows inter-relationships among the data. A broad distinction is made between general and 
                specialized dictionaries. Specialized dictionaries include words in specialist fields, rather than
                a complete range of words in the language.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Comics</h3>
                <img src="<?php echo base_url('images/comics.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>Comics is a medium used to express narratives or other ideas through images, usually combined with text.
                It typically takes the form of a sequence of panels of images. Textual devices such as speech balloons, 
                captions, and onomatopoeia can indicate dialogue, narration, sound effects, or other information. The 
                size and arrangement of panels contribute to narrative pacing. Cartooning and other forms of illustration
                are the most common image-making means in comics; fumetti is a form which uses photographic images. Common
                forms include comic strips, editorial and gag cartoons, and comic books. Since the late 20th century, 
                bound volumes such as graphic novels, comic albums, and tankōbon have become increasingly common, while
                online webcomics have proliferated in the 21st century.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">   
                <h3 class="feature-title">Boigraphy</h3>
                <img src="<?php echo base_url('images/biography.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>A biography, or simply bio, is a detailed description of a person's life. It involves more than just the 
                basic facts like education, work, relationships, and death; it portrays a person's experience of these life
                events. Unlike a profile or curriculum vitae (résumé), a biography presents a subject's life story, highlighting
                various aspects of his or her life, including intimate details of experience, and may include an analysis of 
                the subject's personality. Biographical works are usually non-fiction, but fiction can also be used to portray a 
                person's life. One in-depth form of biographical coverage is called legacy writing. Works in diverse media, from 
                literature to film, form the genre known as biography.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Historical</h3>
                <img src="<?php echo base_url('images/historical.jpg'); ?>" class="img-fluid" style="size: 800*500;">
                <p>The historical books are a division of the Christian Bible, grouping 12 (or in some denominations more) books in the
                Old Testament.[1] In terms of the Tanakh, it includes the Former Prophets from the Nevi'im and two of the ungrouped
                books of Ketuvim, together with the Book of Ruth and the Book of Esther which in the Tanakh are both found in the
                Five Megillot. These 12 books make up the historical books in the Protestant Bible, but several other books not 
                found in the Hebrew Bible are also included in Catholic and Orthodox Bibles (see the list below for details).
                The books tell the history of the Israelites spanning nearly a millennium, from their conquest of Canaan until the return to
                Zion in 539 BC. </p>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Additional Information
                    on Cars</h6>
                    <p>Of course, there is more to learn. </p>
                    <p> Thanks for join with us.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <p>35/A, Colombo Road, Galle<br/>
                    info@heavenofcars.com<br/>
                    + 01 234 567 88<br/>
                    + 01 234 567 89</p>
                </div>
            </div>
            <div class="footer-copyright text-center">© 2020 Copyright:HeavenOfBooks.com</div>
        </div>
    </footer>
</body>

</html>