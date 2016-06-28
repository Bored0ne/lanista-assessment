# Getting Started

 - This can be hosted on a seperate servers to test the breaking out of
   the iframe functionality. Just make sure that you go through the
   files and set the correct paths.
 - test.html is the entry point
 - I used a 350x150 placeholder to demonstrate that the php is returning an image, and can easily be replaced with a 1x1 alpha pixel.

# To make this scalable

 1. Make ad images come from the database.
 2. Add tags table with images' id.
 3. Implement something similar to an acl in the database, managed by a web app, with the baseurl to get images that are "approved" for that site.
 4. Host the database on a load balanced database cluster, maybe something like MongoDB since it has excellent sharding.
 5. I would convert the query to be a single stored procedure.
