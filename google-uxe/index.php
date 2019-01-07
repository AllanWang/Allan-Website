<!DOCTYPE html>
<html lang="en">

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/include/config.php");
$page_title = "Google UXE";
$page_description = "Google UXE";
$page_keywords = ['Google', 'UXE'];
$theme_color = "#4078c0"; //github blue

phpHeader(); ?>
<body>

<?php
phpNav(); ?>

<main>

    <div class="container">
        <div class="section">
            <h2>Google UX Engineer</h2>

            <h5>What is a Google UXE?</h5>
            <p>
                A UX engineer at Google is a mix between design and engineering.
                Google has two "lenses", which is really just a spectrum.
                On the design lens, you will work with a team of designers.
                The goal of a design UXE is to quickly prototype builds, verify feasibility, and offer opinions/changes from an
                engineering perspective.
                When building prototypes, the focus is on speed, and being able to adapt to changes on the fly;
                there's no need to support all builds or have robust code.
                On the engineering lens, you will work with a team of engineers.
                You will act essentially as a front end engineer, and are expected to be very knowledgeable with your
                stack.
                If other engineers have a problem (say with Android), they may go to you for pointers.
                As you are working in production code, you need to follow all the same constraints as other SWEs (code review, using internal tools, running all the tests, etc).
            </p>
            <h5>How's the interview?</h5>
            <p>
                When interviewing, your format will be slightly different from other software engineers.
                In most cases, you will not need to worry about Big O.
                However, you still need to know about your stack, and be able to explain why certain implementations are
                better than others.
                Again, the goal of a UXE is to be versatile.
                You should be able to think about many ways to implement projects, both code wise and design wise.
                As a design lens UXE, you may also get a design interviews.
                These aren't code based and typically revolve around your ability to work with designers, and your awareness
                to design in general.
                In both lenses, you are expected to know how to code in your stack without the use of an IDE.
                As of writing this (2018), coding interviews are conducted via Google Docs.

                Example questions include:
            <ul class="browser-default">
                <li>
                    Basic algorithm questions, eg finding the most common character in a string.
                    Questions get more complicated than that, but you won't be expected to implement things like a red black tree.
                </li>
                <li>
                    General design questions. Given a broad overview of a project, how would you implement it?
                    What tools will you use? What will you have to consider? How will you cater to the needs of the users?
                    What types of users will there be?
                </li>
                <li>
                    Actual implementations. Eg for Android, design a drag and drop UI with 3 shapes such that they never overlap.
                    The question will likely come after other questions, and you are expected to create a working, compilable implementation.
                    For drag and drop specifically, you will need to know things like the MotionEvent methods, how to avoid jittering,
                    potentially adding thresholds before interpreting events as movement, etc.
                    The more you can point out and address, the better.
                    This is a pretty huge difference from SWE questions, as it's of a much bigger scope.
                    Focus on all parts of the question rather than honing in on one specific part the entire time.
                </li>
            </ul>
            <h5>Why UXE?</h5>
            </p>
            <p>
                So why UXE, especially if you intend on being a front end engineer?
                The primary difference is your expected tasks while working.
                A front end engineer is a sub category of a software engineer, and the focus is primarily on bug fixing.
                You may transition from front end development to back end development, but it is not necessarily
                a benefit to your career in optimizing UX.
                A UXE serves to uphold high quality UX in products, and offers both coding expertise to designers and design expertise to developers.
                A UXE will push the bounds of good UX design, and will be rewarded for such improvements.
                It is in their benefit to avoid cutting corners, which often happens to UX given tight time constraints.
                The broad spectrum between the two lenses also allows a UXE to focus more on engineering or design throughout their work.
            </p>
            <h5>My experience</h5>
            <p>
                When I interned at Google in the summer of 2018, I initially entered as a design lens UXE.
                I hadn't really known much about UXE then, though I've had <a href="https://github.com/AllanWang">my fair share</a> of Android projects,
                which ended up perfectly aligning with the position.
                The great thing about the design lens is that you can challenge yourself code wise, while being able to use the newest libraries on the newest devices with the newest SDKs.
                You will have much faster iterations, as well as much greater control over your project, as you may often develop alone.
                Comparatively, a SWE may not be able to significantly impact a project, especially if it is an older one.
                On the other hand, many SWEs who join as a UXE may find it unfulfilling to work on prototypes vs production code.
                This is where the flexibility of a UXE is very helpful, as you may transition to a more engineer based lens.
                I was fortunate enough to finish my project as an intern early, and spent 4 of my 14 weeks working with the software engineers on another Android project.
                Another "sacrifice" to be made as a design UXE is that design moves much faster than building the product itself.
                You will often face last minute changes, or cancellations of layouts that you have been working on for some time.
                This is why it is crucial for UXEs to be good at planning their work, and to iterate quickly rather than focusing a significant time on a single component of the end product.
            </p>
        </div>
    </div>
</main>
<?php phpFooter(); ?>
</body>

</html>
