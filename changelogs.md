### **Changelogs**
All notable changes to this project will be documented in this file.

> [ v3.0.2 ] Released - 14/11/2022 :
- Added : Now you can see a list of upcoming movie reviews on the Web
- Added : Support Progresive Web App (PWA) for Android and iOS
- Change : On the read review page on mobile, the card cover is replaced with a trailer card
- Fixed : Rating badge and number of views do not appear in the list of all films
- Fixed : Trailer not showing on mobile article page
- Fixed : The menu button to make it clearer to see
- Fixed : List of popular and upcoming movies on review reading page
- Fixed : Back button blocking content on mobile
- Fixed : The issue of the article and category list table not appearing, has been fixed
- Fixed : Issues with the appearance of articles and categories that are not neat on the admin page
- 
> [ v3.0.1 ] Released - 13/11/2022 :
- Added  : You now have the option to view the latest movie reviews for the past week
- Added  : Now you can see the most popular movie reviews on the explore page
- Added  : You can see video trailers in each movie article, by pressing the "Watch Trailer" button
- Added  : Contributors can now add video trailers from youtube
- Added  : Now you can see the films that will be reviewed in the future ( Mobile )
- Added  : The page not found design has been updated
- Change : The Headlines feature may have been enabled for some contributors
- Change : Complete overhaul of UIUX in explore page to improve user experience
- Change : Changed the bottom navbar design style, floating to fixed bottom
- Change : Badge button on the main mobile-view has been removed due to an issue that can't be fixed now
- Change : The "Upcoming" menu has been removed for the time being, as the feature is currently under development
- Fixed : Fixed unreleased reviews appearing on search pages
- Fixed : Headline does not appear on the main page of the website has been fixed
- Fixed : Error when changing movie posting has been fixed
- Fixed : Headline placement has been improved on mobile and desktop
- Fixed : Modal popup from APIs information not showing has been fixed
- Fixed : ``issue #1`` has been fixed
- Fixed : ``issue #2`` has been fixed
- Fixed : ``Issue #3`` has been fixed
- Fixed : ``Issue #4`` has been fixed

---

- ``Issue #1`` : The search form card in the mobile-view displays a light theme, when the device system uses a light color scheme
- ``Issue #2`` : For trailers only supports direct video links, does not support videos from youtube (due to copyright issues)
- ``Issue #3`` : The search keyword for the title of the film must be case sensitive
- ``Issue #4`` : Popular and favorite movie section still not showing correct information
- ``Issue #5`` : The genre badge button on the main mobile-view page is not working

> [ v3.0.0 ] Released - 11/11/2022 :
- Added : User Register or Sign Up
- Added : User Management
- Added : Introduction Web API for Developers
- Added : Now the mobile version of filsvox is available, still web-based in BETA stage
- Added : Now if you use a smartphone, you will be directed to the mobile-view web page
- Added : Now you can search film by title, artist, genre, and writers ( BETA )
- Added : Search by category in mobile view has worked well
- Added : Now every movie has a star rating ( BETA )
- Added : You can now see the number of visitors in each movie review ( BETA )
- Added : Improved search results page in mobile view to make it more concise
- Added : Now you can edit user profile
- Added : More role has been added
- Change : Introduce new favicon
- Change : Improve context menu container UI
- Change : Improve count card UI in Dashboard
- Change : Improve Login and Register UI
- Change : Improve Add Category UI Form
- Change : Full Re-design UI for Login Page
- Change : More categories has been deleted
- Change : Only admins can delete categories
- Fixed  : Only admins can change contributor roles
- Fixed  : Contributors shouldn't be able to access the contributor management page
- Fixed  : Fixed an error adding new contributors
- Fixed  : Edit password on user profile has been fixed
- Fixed  : Current user not detected in sidebar has been fixed
- Fixed  : Minor bug fixes
- Issue  : #1 - Edit user profile avatar and password ( Closed )

> [ v2.0.0 ] Released - 05/11/2022 :
- Added : Now you can search or view list film by category
- Added : Now you can add trailer video, if trailer video is not available, you can add only cover image
- Added : Now you can added detail information ( directors, writers and film actors )
- Added : Introduce chart for film count published by month per year
- Added : Introduce chart for film count published by category per year
- Added : You can add new category from admin dashboard, also you can delete category
- Added : Can see all film by category from admin dashboard, if you click on category button
- Change : Merge to Quill.JS for better text editor
- Change : Improve navbar background color in Dashboard
- Change : Improve action buttons in article list
- Change : Full redesign of the dashboard UI
- Change : Full redesign of the form article UI
- Change : Full redesign of the edit form article UI
- Change : Improve folder structure for better scalability
- Fixed : The search result layout display has been fixed
- Fixed : All minor bugs
- Issue : For trailers only supports direct video links, does not support videos from youtube (due to copyright issues)

> [ v1.0.2 ] Released - 29/10/2022 :
- Initial Build
- Initial Public BETA Release
- Added : Landing Page
- Added : Login Page
- Added : Dashboard Page
- Added : Review Page
- Added : Now you can add post, edit post, delete post, and view post
- Added : Now you can search film by title
- Added : Now you can search film by categories
- Added : Use disqus for comment
- Change : Improve UI/UX Dashboard
- Change : Improve UI/UX Review
- Change : Improve UI/UX Landing Page
- Change : Merge to Tailwind CSS Latest version 3.0.7
- Change : Merge to Alpine JS Latest version 3.0.7
- Change : Merge to Bootstrap Icons Latest version
- Fixed   : Fixing some bugs
- Issue  : Film Description is not showing
- Issue  : If wrong password or username, is not showing error message
- Issue  : Can't show multiple categories
- Issue  : Can't add two or more headline, so for now, developer disable headline feature
- Issue  : Others issues or bugs maybe not listed here
- Issue  : Not Responsive on Mobile Devices for now, maybe in the future

> Write by [Andika Tulus Pangestu](github.com/andikatuluspangestu)
