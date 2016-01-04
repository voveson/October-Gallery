##Image Gallery

A plugin for creating and managing image galleries, written for [october cms](http://www.octobercms.com).

###To Do
- [ ] __Back End__
    - [X] Image Model `beforeSave()` function:  populate `display_order` and `content_html` fields
    - [X] Gallery Model:  serialize `Images` in their proper display order
    - [ ] Create a partial for the Image relationship manager toolbar with a button to save reordering
    - [ ] Image reordering ajax handler (persist display order to the database)
    - [ ] Mark the "Galleries" menu item as `active` when on Galleries pages
- [ ] __Front End__
    - [ ] Basic Gallery component
    - [ ] Advanced Gallery component
    - [ ] Theme component overrides
    - [ ] Create Gallery "snippets" (or register components as snippets) to be used on Static Pages.