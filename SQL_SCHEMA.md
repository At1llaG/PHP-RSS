### TABLE SCHEMA

id
title
link = guid = atom:link
media = enclosure = media:content = image
meta_description = description
content = news = content:encoded
pubDate


### SAMPLE QUERY

$query = "INSERT INTO $tableName
    (title, link, media, meta_description, content, pubDate) VALUES 
    ($title, $link, $media, $meta_description, $content, $pubDate);";





                //$conn->real_escape_string


                