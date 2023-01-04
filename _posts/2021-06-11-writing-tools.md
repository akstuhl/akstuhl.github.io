---
layout: post
title:  "Writing workflow + plain text tools"
date:   2021-06-11
categories: "other work"
tagline: "writing tools"
---

I use Scott Selisker's [Scrivener-inspired plain text writing workflow](http://u.arizona.edu/~selisker/post/workflow/) with the free software tools [Zotero](https://www.zotero.org/) and [gedit](https://wiki.gnome.org/Apps/Gedit). I also take notes in markdown, the simple markup language that the workflow uses for academic drafting.

A couple simple shell scripts, attached to keyboard shortcuts using gedit's "Manage External Tools" pane, are really helpful with this workflow.

- Zotero picker 

    Requires [Better BibTeX for Zotero](https://retorque.re/zotero-better-bibtex/). Launches a Zotero bibliographic entry picker and inserts the citation key into your document once you make a selection. Set "Output" to "Insert at cursor position."
  
    ```bash
    curl -s http://127.0.0.1:23119/better-bibtex/cayw?format=pandoc\&brackets=true
    ```
  
- PDF paste

    Requires `xclip` package if on Linux. Pulls text from your clipboard and cleans it up in the way you'd usually want when copy-pasting a quotation from a PDF (repairs line breaks and adjusts quotation marks). Set "Output" to "Insert at cursor position."
  
    Linux: 
    ```bash
    xclip -o -selection clipboard | tr '[\n\r]' ' ' | sed -E -e "s/- //g" -e "s/[ \t]*$//" -e "s/[\"\“\”]|[\’\‘]+/\'/g"
    ```
  
    Mac OS (untested):
    ```bash
    pbpaste | tr '[\n\r]' ' ' | sed -E -e "s/- //g" -e "s/[ \t]*$//" -e "s/[\"\“\”]|[\’\‘]+/\'/g"
    ```
    
- Wrap selection

    Requires `zenity`, a GTK feature; untested outside GNOME. Prompts you for a bracket character or other string and appends it to either side of the selected text. (Handy for adding emphasis or hyperlinks to markdown text.) Set "Input" to "Current selection" and "Output" to "Replace current selection."
    
    ```bash
    read selection
    wrapper=$(zenity --entry --title="Wrap selection - gedit" --text="Wrapper:")
    wrapend=$(echo "$wrapper" | sed 's/\[/\]/g
                                     s/(/)/g
                                     s/</>/g')
    echo -n "$wrapper$selection$wrapend"
    ```

- [`wc-tracker`](https://www.npmjs.com/package/wc-tracker) is a command line tool and Node.js module for tracking word count changes to one or more documents.

---

I originally used the Atom text editor in this workflow [before it was sunset](/blog/2022-07-16-text-editors.html) and made a few packages to customize it.

- [`notes-from-pdf`](https://atom.io/packages/notes-from-pdf), an Atom package that improves the process of copy-pasting quotations from a PDF into a text file
- [`pandoc-interface-yaml`](https://atom.io/packages/pandoc-interface-yaml), an Atom package that lets you export to various document formats using the options needed for citation formatting, etc.
- [`rpg-dice`](https://atom.io/packages/rpg-dice), an Atom package for making Dungeons & Dragons-style dice rolls directly in a text editor (this one is not so much a boost to the academic writing productivity)
