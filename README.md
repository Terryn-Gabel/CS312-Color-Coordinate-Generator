This is the group project repo for team 21!
# Milestone 2
- [x] finish m1
- [x] radio button
    - [x] add a radio button beside each dropdownso a current color can be selected
        - [x] Defaults to the color in the first row aka the first one is selected by default
- [x] click a cell in the lower table
    - [x] cell is colored with the selected color
    - [x] its coordinate is added to the right column by the color name in the upper table
        - [x] in a sorted order aka "A1, B2, C3" not "C3, A1, B2" regardless of order clicked
- [x] change a drop-down to a new VALID color
    - [x] all of the cells in the table change from the old color to the new color
- [x] print view
    - [x] Update the print view to support the new color coordinate generation
    - [x] When the form is submitted, the print view behaves as before
    - [x] the radio buttons are NOT shown
    - [x] The lower table's cells remain blank (white) and are not colored
    - [x] The right column of the upper table does contain the cell coordinates.
# Grading Scale
- [x] Ability to paint with a chosen color, coordinate appears in table when painted (10 points)
- [x] Print view shows coordinates, no colored-in cells (10 points)
- [x] Print view prints on one page (unless more than 5 colors chosen.  In that case, best effort) (10 points)
- [] DB table added to store colors, application pulls from table to populate drop downs (10 points)
- [] User interface to add/edit/delete colors (10 points)
- [] Final Polish, app is a well-polished, good looking, application without errors (40 points)
    - [] This is a large category and basically will be an overall impression of your site.  
    - [] Most of the submissions to Milestone 1 would have received 30-35 points on this (so don't stress too much!).
    - [] Features that aren't implemented won't count against, but if something is implemented, it should work nicely.

# Milestone 1
## Pages
- [ x] Home
  - [ x] Modern Design
  - [ ] Basic welcome information
  - [ x] Useful links to get to the other pages on the site
    - [ x] Home
    - [ x] About
    - [ x] Color Coordinator
- [ x] About
  - [ x] Team member names
  - [ x] Brief biography of each team member
  - [ x] Picture or avatar for each team member
- [ x] Color Coordinator
  - [ ] See Requirements below

### Color Coordinate Generation
- [ x] `GET`
  - [ x] URL parameters asking for user input:
    - [ x] rows/columns restrictions: `1 <= x <=26`
    - [ x] number of colors: `1 <= x <= 10`
  - [ x] validate user input
    - [ x] If invalid: return the user to the form with meaningful error messages
- Successful validation:
  - [ x] pass the parameters `(int rows/columns, int colors)` to the **SAME** controller/action
  - [ x] validate the parameters
    - [ x] if valid:
      - [ x] return two tables
      - [ ] have a 'print' button
    - [ ] if invalid: render the form with error messages

#### Table requirements:
- [ x] Table 1 (upper table):
  - [ x] 2 col by `x` row (`x` = numColors param)
  - [x] no header row
  - [x] spans most of the width of the page
  - [ x] right column: 80% table width
  - [ x] left column
     - [ x] 20% table width
     - [ x] each cell is a drop-down with 10 color names (these should be ordered in an intuitive way for the user)
        - [ x] each cell has a different default set color
           - [ x] 1. red
           - [ x] 2. orange
           - [ x] 3. yellow
           - [ x] 4. green
           - [ x] 5. blue
           - [ x] 6. purple
           - [ x] 7. grey
           - [ x] 8. brown
           - [ x] 9. black
           - [ x] 10. teal
         - [ x] No two drop-downs can select the same color at the same time. If this happens:
           - [ x] revert the most recently changed drop-down to the previous value selected
           - [ x] inform the user in a non-intrusive way (ie not an `alert()`)
- [ x] Table 2 (lower table):
  - [ x] (`n` + 1) by (`n` + 1) (`n` = row/column param)
    - **This table should always be square**
  - [ x] upper leftmost cell is empty
  - [ x] top row:
    - [ x] leftmost cell is empty
    - [ x] remaining cells accross the top are lettered with capital letters in alphabetical order from A - Z.
      - `Z` is used for the max size of 26
  - [ x] leftmost column:
    - [ x] top cell is empty
    - [ x] remaining cells going down are numbered in order from 1 - 26


### Pressing the print button
- [ x] Takes the user to a "printable view" of the resulting tables.
- [ x] Keep the same table dimensions and easily print on one page (8.5" x 11") in portrait mode.
  - [ x] Render in greyscale
  - [ ] Header: greyscale logo and company name
  - [ x] drop downs --> selected color names as plain text

**Note: This page will not use the common view layout as the rest of the site.**


## Fuel PHP Framework
- [ x] Every page, except the print view, should use the same layout and be managed in a central location (ie, if there's a typo, you only have to change it in one place).
- [ x] Each team member is responsible for hosting the complete application on the local_html server reachable at `.../~[eid]/m1/...`.
- [ x] `.../~[eid]/m1` should redirect to the home page of the site.
- [ x] One member of the group must submit a tar file of the project to Canvas. Tar file structure should be as follows:
  - [ x] Fuel
    - [ x] app
      - [ x] classes
        - [ x] controllers
           - [ x] `your controllers`
        -  model
           - [ x] `your view folders`
      - [ x] views
        - [ x] `your view folders`
  - [ x] local_html
    - [ x] m1
      - [ x index.php
      - [ x] assets
        - [ x] `any assets used`

### Grading Breakdown
- [ ] Home Page as specified, site uses Fuel framework and templates (10 points)
- [ ] Member Biographies (10 points)
- [ ] Color coordinate page uses GET/POST paradigm (10 points)
- [ ] Parameters passed as controller parameters (10 points)
- [ ] Parameter Validation (10 points)
- [ ] Tables generated as specified (10 points)
- [ ] Form controls work and obey selection restrictions (10 points)
- [ ] Print View (10 points)
- [ ] * Site available on team member's local_html at the specified URL (10 points)
- [ ] * Submission of team post-survey (10 points)
  - Survey will be available for a few days starting at the due date of this assignment

Items marked with triple stars (*) are individually graded by student.  Otherwise, the first 8 items will be awarded points to all team members the same.  The notable exception is that team members who did nothing or significantly less work will be penalized, potentially losing all of these points in extreme cases.

# Biographies
Ashlyn Hillyard's biography:
Hi my name is Ashlyn! I am a Junior enrolled in CS312, Modern Web Applictions, at Colorado State University. My ultimate goal is to create software that solves practical problems and makes people's lives easier. I am very passionate about software development and am extremely excited to be on a team with other individuals who share that same passion. In my free time I love running and am on the Cross Country and Track & Field team at CSU. 

Rachel Hall's biography:
My name is Rachel Hall. I am a senior at Colorado State University. I have a cute dog and work for a Cybersecurity company!


Terryn Gabel's biography:
My name is Terryn Gabel. I am a senior at Colorado State University, studying Computer Science, and a Software Engineer intern. In my spare time I enjoy playing video games and spoiling my cat.

Cyrus Turner's biography: 
Hi my name is Cyrus, and I am the chief marketing officer at Cam’s Interior Design Services. I am also a Colorado State University student who is currently enrolled in CS 312 and is about to graduate. Outside of my professional life, I am passionate about playing and producing music. 

