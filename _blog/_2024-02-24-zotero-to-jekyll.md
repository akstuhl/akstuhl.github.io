If you're putting together something like an annotated bibliography and you use Zotero to keep track of its sources _and_ you want to use the Jekyll static site generator to present it, here's a translator file that could help you.

1. Create a new collection and a directory for it in your Jekyll project
2. Add an index page for the collection to your Jekyll project [example]
3. Add a Jekyll template for the items [example]
3. (Optionally) move your Zotero items into a new Zotero collection
4. Download this translator file and add it to [translators directory]
5. Rescan translators directory
6. Select a Zotero item, right-click, and choose "Export item." You should see an option for "Jekyll item" in the dropdown menu. Select the Jekyll collection directory as the export location.
7. Repeat `6` for any other items.

There are a number of things it would be nice to add to this workflow that wouldn't be possible (so far as I can tell) without creating a plugin for Zotero rather than just a translator file. 

- Automatically generate a Jekyll markdown file for any new addition to a given Zotero collection
- Set a default directory (within the Jekyll site) for generated markdown files for a particular Zotero collection
- Automatically name generated markdown files, e.g. by their bibtex key
- Automatically maintain generated markdown files, updating them whenever the corresponding Zotero items change
- Provide additional export templates for other static site generators

That said, a plugin is a big step up in complexity from a translator file, and I probably won't go down that path unless there's indication that it'd be useful to other folks. If it would be for you, feel free to [email me](mailto:andykstuhl@gmail.com) so I can take note.
