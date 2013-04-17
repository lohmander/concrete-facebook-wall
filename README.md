concrete-facebook-wall
======================

Simple block to display contents of a Facebook wall of some sort.

Installation
------------
1. Put the files in blocks/facebook_wall/. (You'll have to create the facebook_wall folder)
2. Log in to Concrete5
3. Go to your dashboard
4. Click on "Block types"
5. Click install on "Facebook Wall"
6. Done, you can add the block where ever you want


Configuration
=
You need an Facebook application ID and Secret. You can get it here: https://developers.facebook.com/apps

The "Facebook URL" is the url to the graph "feed" of the page or user you want to display.

For instance, if you'd like to display Google's feed, this would be the appropriate URL

    https://graph.facebook.com/google/feed

Notice that the https:// is required.
