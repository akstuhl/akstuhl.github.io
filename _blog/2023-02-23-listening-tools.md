---
title:  "Some listening tools"
date:   2023-02-23
categories: blog
layout: post
---

This post is a tangled reflection on three aspects of this hobby project in which my thinking has changed a lot since the initial attempts: how a different kind of automation for radio should behave, how 

# Testing a better kind of automated "radio"

The main tool here, [`tuner`](https://git.sr.ht/~akstuhl/tuner), borrows its premise from a project called [the Frequency Clock](https://web.archive.org/web/20060810072929/http://www.frequencyclock.net/central.html) that the artist duo [r a d i o q u a l i a](https://wavefarm.org/radio/archive/artists/sezmm8) developed starting in the late 90s. The Frequency Clock envisioned a global, informal network of autonomous broadcasters sharing each others' sounds through FM and internet transmission, and it combined a program database with a broadcast schedule builder to facilitate this. In other words, it used automation as an opportunity to nudge its users toward an outlook where syndication -- sharing and relaying sounds among other stations -- was the primary way to fill a broadcast day. 

This idea of privileging lateral syndication is at odds with the way that radio stations typically use automation software today, even independent stations. Popular automation systems like Station Playlist encourage program directors to schedule blocks of time where songs are pulled from a music library.

In my mind, this approach brings radio uncomfortably close to how streaming platforms deploy "radio" as a metaphor: Spotify, for instance, uses "radio" to mean an endless automatic playlist that stays within stylistic bounds derived from an initial artist. 

What else would it mean for radio tools to refute what streaming platforms mean when they use "radio" as a metaphor? It would mean rejecting the idea that a station's sound should be steady and coherent over the course of a day or week. Freeform radio, the antithesis of that idea, has always had the trade-off that you as a listener might love one or two programs on the schedule and detest everything else. So a freeform-oriented listening tool should have shows, rather than stations, as its organizing unit. It would be at odds in that sense with some creative radio listening tools, like Radio Garden, which valorize the medium by equating a global diversity of stations with a global diversity of sounds. That equation is certainly true in practice, and Radio Garden is an inspiring and ear-opening project; but isn't there a slight friction with leaning into the geographic reification of sounds, when stations are just as capable in theory of boosting each other's signals from around the world?

But I should backtrack here and clarify that `tuner` is not at all designed for broadcasters to use, even though it partly came out of thinking about radio automation. 

# Building for a user base of one

As happens with most of my hobby coding projects, my first pass at this fizzled out because the idea's execution, once I started trying to build it, turned out to be orders of magnitude more complex than I'd thought. It was only when a very different technical approach occurred to me a couple years later that I worked up the interest to resume (or rather restart) the effort. This new approach has been to offload as much as possible to existing tools. What if, instead of building a web app with a scheduling interface and a media player, I just built a little connective tissue between tools that already did these two things pretty well? 

This also meant not suspending any serious worries about software availability/compatibility. It turned out there is already a tool, [`mpv`](https://mpv.io/), that works great on my computer and does a fantastic job at the specific task I wanted to accomplish here: taking a URL and playing the audio it finds there. Reproducing even a couple 

Since mpv is a video player, the only reason this 



In the future I might try to write a web controller for the script, which would 

# Protocols versus practicalities
