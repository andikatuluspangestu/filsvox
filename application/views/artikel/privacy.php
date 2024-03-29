<body class="font-montserrat text-sm bg-slate-900 dark:bg-slate-900 ">
  <div class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">

    <!-- Left Sidebar -->
    <?php
    $this->load->view('partials/sidebar-kiri');
    ?>

    <main class=" flex-1 py-10  px-5 sm:px-10 mt-5">

      <!-- Responsive Header -->
      <?php
      $this->load->view('partials/responsive.php');
      ?>

      <!-- Rekomendasi -->
      <section class="mt-5">
        <div class="flex items-center justify-between">
          <span class="font-semibold text-white dark:text-white">Daftar Review Terbaru</span>
        </div>

        <div class="container my-5 mx-auto">
          <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <p>
              Comments are welcomed and encouraged on this site, but there are some instances where comments will be edited or deleted. Comments are subject to the website's terms of use. Violations of this policy may result in comments being deleted and/or commenters being blocked from access to commenting or to the blog entirely.

              All Rights Reserved: The blog owner reserves the right to edit, delete, move, or mark as spam any and all comments. Blog owner has the right to block access to any one or group from commenting or from the entire blog.
              Comment Form Guidelines: The comment form must be filled in with a proper or legitimate sounding name and URL. Comments using keywords, spam or splog-like URLs, or suspicious information in the comment form will be deleted. Your comment will not be edited, it will simply be deleted in its entirety.
              Links: If you are leaving a comment and want to point to a link on your own or someone else’s site that is relevant to the topic, please feel free to do so. Keep in mind, however, the link must be relevant and add value to the blog and its readers. This blog is set up to automatically hold any comment with more than one link in moderation, which may delay your comment from appearing.
              Thank You Comments: Superficial comments that appear to be an attempt to get a backlink or get past comment moderation will be deleted.
              Copyright/Plagiarism: If notice is received that a comment contains proprietary, copyrighted or plagiarized information, that comment will be deleted and the commenter may be blocked from further commenting.
              Email Privacy: Email addresses are required for commenting, and they are not published on the blog, nor shared. They may be used by the blog owner to privately contact the commenter.
              Commenter Privacy and Protection: Comments containing email addresses, physical mail addresses, phone numbers, and any private and personal information will be deleted as soon as possible to protect the privacy of the affected party. To prevent such editing, never share private information within blog comments.
              Attachments: If you want to post an image or a workbook, please upload it to a file sharing service such as Photobucket (images) or SkyDrive (files) and link to it in your comment. Keep in mind that your comment may be held if it contains links. Please do not post screenshots of VBA code — copy and paste the code into the comment directly.
              Language and Manners: Comments which include offensive or inappropriate language, or considered by the blog owner to be rude and offensive, will be deleted. Especially irritating are comments that disparage Microsoft (while asking for help with a Microsoft product). In the interest of fair play, no personal attacks are permitted in this blog's comments. You may question or argue the content, but not attack the blogger, nor any other commenters. Failure to respect fellow participants on this blog could result in removal and blocked access.
              What To Do If Your Comment Does Not Appear: Please be patient. Comments cannot always be approved right away. Please do not submit the same comment unless you think your original comment was not submitted correctly the first time.
              Multiple Comments on the same Post: Multiple related comments on the same blog post (usually one after the other) may be combined into a single comment.
              Irrelevant Comments: If a comment is irrelevant to a specific post, it may be moved to another post to which it is relevant, if possible. If no suitable post can be found, it may be deleted.
              Comment Spam: Any comment assumed to be possible comment spam will be deleted and marked as comment spam. In addition, it will be reported to services such as Project Honeypot, Botscout and/or Stop Forum Spam.
              Liability: All comments within this blog are the responsibility of the individual commenter. By submitting a comment on this blog, you agree that the comment content is your own, and to hold this site, Jimmy Peña, and all subsidiaries and representatives harmless from any and all repercussions, damages, or liability.
              Trackbacks Are Comments: All trackbacks will be treated inline with our Comments Policy.

              Remember, commenting is a privilege, not a right.

              All information on this page is subject to change without notice.
            </p>

          </div>
        </div>

      </section>
    </main>

    <!-- Sidebar Kanan -->
    <?php
    $this->load->view('partials/sidebar-kanan');
    ?>

  </div>
</body>