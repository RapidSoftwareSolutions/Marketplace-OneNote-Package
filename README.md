[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/OneNote/functions?utm_source=RapidAPIGitHub_OneNoteFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# OneNote Package
OneNote is a popular note-taking tool that's available online and on many mobile and tablet platforms. By integrating your apps with OneNote, it's easier than ever to create empowering apps on your favorite platforms and reach millions of users worldwide.
* Domain: [onenote.com](http://www.onenote.com)
* Credentials: clientId, clientSecret, accessToken

## How to get credentials: 
1. Sign into the [Microsoft account Developer Center](https://account.live.com/developers/applications) with your Microsoft account. 
2. Choose Create application.
3. Load the following URL request in a web browser or web-browser control:
``` 
GET https://login.live.com/oauth20_authorize.srf
  ?response_type=token
  &client_id={client_id}
  &redirect_uri={redirect_uri}
  &scope={scope}
```

## Custom datatypes:
  |Datatype|Description|Example
  |--------|-----------|----------
  |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
  |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
  |List|Simple array|```["123", "sample"]```
  |Select|String with predefined values|```sample```
  |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
  
## OneNote.createPage
Creates a new page in the user's default section and notebook.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| A valid OAuth token provided to the app based on the user credentials and the user having authorized access.
| content    | String     | Page content

## OneNote.createPageInSection
Creates a new page in the specified section.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| A valid OAuth token provided to the app based on the user credentials and the user having authorized access.
| content    | String     | Page content
| sectionId  | String     | The id of section where the page is to be created.

## OneNote.createSectionDefaultPage
Creates a new page in the specified section of the user's default notebook. If the section doesn't exist (or was renamed), the API will create the section.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| A valid OAuth token provided to the app based on the user credentials and the user having authorized access.
| content    | String     | Page content
| sectionName| String     | The name of the section in the default notebook to create this new page in, if the section does not already exist.

## OneNote.getAllPages
Gets a collection of pages (metadata) across all notebooks in OneDrive that the user can access.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| A valid OAuth token provided to the app based on the user credentials and the user having authorized access.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getSectionPages
Gets a collection of pages (metadata) under the specified section.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| A valid OAuth token provided to the app based on the user credentials and the user having authorized access.
| id         | String     | Section ID.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Boolean. Specifies to include the count of the returned collection.
| pageLevel  | Select     | Boolean. Returns the level and order properties of the pages.

## OneNote.getSinglePage
Gets a collection of pages (metadata) under the specified section.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | Section ID.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| pageLevel  | Select     | Boolean. Returns the level and order properties of the pages.

## OneNote.getPageContent
Gets a collection of pages (metadata) under the specified section.

| Field           | Type       | Description
|-----------------|------------|----------
| accessToken     | credentials| The id of page.
| id              | String     | Section ID.
| includeIDs      | Select     | Boolean. 'true' to include auto-generated element IDs.
| preAuthenticated| Select     | Boolean. 'true' to return URLs that temporarily enable public access to the image resources on the page.'true' to include auto-generated element IDs.

## OneNote.getPagePreview
Gets preview content for a specific page.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | Section ID.

## OneNote.deletePage
You can't recover deleted data, so be careful when using this method. Deleting pages using the API deletes them permanently. They are not added to the OneNote Recycle Bin.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | Section ID.

## OneNote.getAllSections
Gets all sections to which a user has access in all OneNote notebooks that are stored in Microsoft OneDrive. This includes sections in notebooks that are both owned by and shared with the user. You can also retrieve all sections to which the user has access inside a specific notebook or section group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getNotebookSections
Gets a collection of sections from the specified notebook.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | Notebook id.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getGroupSections
Gets a collection of sections from the specified section group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the section group that contains the section.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getSingleSection
Gets a specific section inside a OneNote notebook that is stored in Microsoft OneDrive. This can be a section in a notebook that is either owned by or shared with the user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | Section id.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.

## OneNote.createSection
Creates a new section in the specified notebook on Microsoft OneDrive.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the notebook where you want to create the section.
| name       | String     | Section name

## OneNote.createGroupSection
Creates a new section in the specified section group on Microsoft OneDrive.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the section group where you want to create the section.
| name       | String     | Section name

## OneNote.renameSection
Renames the specified section.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the section to update.
| name       | String     | Section name

## OneNote.getSectionGroups
Gets all section groups to which a user has access in all OneNote notebooks that are stored in Microsoft OneDrive. This includes section groups in notebooks that are both owned by and shared with the user. You can also retrieve all section groups to which a user has access inside a specific notebook or section group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getGroupSectionCollection
Gets a collection of section groups inside a specific section group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the parent section group.
| filter     | String     | A Boolean expression for whether to include a particular entry. Example: title eq 'Trip Planning'.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getSingleSectionGroup
Gets a specific section group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the parent section group.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.

## OneNote.createNotebookSectionGroup
Creates a new section group in the specified notebook.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the notebook where you want to create the section group.
| name       | String     | Section group

## OneNote.createSectionGroup
Creates a new section group in the specified section group.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the notebook where you want to create the section group.
| name       | String     | Section group

## OneNote.getAllNotebooks
Gets all notebooks to which a user has access in Microsoft OneDrive. This includes notebooks that are both owned by and shared with the user.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the notebook where you want to create the section group.
| orderBy    | String     | Expression specifying order. Default is lastModifiedTime desc. Example: createdTime.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.
| top        | Number     | Specifies to return only the first n results. Default is 20, maximum is 100. 
| skip       | Number     | Specifies to skip the first n results, typically used for paging. Example: 5.
| search     | String     | Specifies the term or phrase to search for in the page title, page body, image alt text, and image OCR text.
| count      | Select     | Specifies to include the count of the returned collection.

## OneNote.getSingleNotebook
Gets a specific notebook.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| id         | String     | The id of the notebook where you want to create the section group.
| select     | List       | Expression specifying the properties to return
| expand     | List       | Expression specifying the navigation properties to return inline.

## OneNote.createNotebook
Creates a new notebook for the user in Microsoft OneDrive.

| Field      | Type       | Description
|------------|------------|----------
| accessToken| credentials| The id of page.
| name       | String     | Section name

