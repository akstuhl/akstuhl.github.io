---
layout: post
title:  "Stream Eddies"
date:   2021-06-28
categories: sound-art
tagline: "machine learning sound regurgitator"
---

![](/assets/streameddies.png)

_Stream eddies_ is a granular sound regurgitator that uses a [machine learning audio classifier](https://github.com/IBM/MAX-Audio-Classifier) to sort and select samples. Similarly to other granular effects like [Clouds/Beads](https://mutable-instruments.net/modules/beads/) and [streamStretch~](https://github.com/wbrent/streamStretch_tilde), this process aims to take an ongoing but non-uniform source signal and give it a somewhat denser consistency. _Stream eddies_ works by chopping the incoming sound into 5-second samples, running the classifier on each sample, and then semi-randomly choosing samples to play back with bias toward the classification values it has received most so far. For example, if after 2 minutes of input the classifier has returned "trombone" more often than any other label, the sample that plays back most frequently will be the one that the machine learning analyzer has deemed the most trombone-like.

Instructions for running _stream eddies_ are attached to its [code repository](https://github.com/akstuhl/stream-eddies).

The motivation for _stream eddies_ comes through thinking about streaming-first (instead of recording-first) approaches to working with sound. A challenge when working with streams (by which I mean ongoing sound sources, e.g. a radio or a livestream of birds) is that you might want to be able to tap into, at any point in time, a given source and have it **sound like** that source. That is, the birds may only be vocalizing a third of the time, leaving you with only silence or background noise when you might expect to be able to access a "bird" sound. Time-stretching and texture synthesizing are good ways of removing momentary silences from a signal, but they don't necessarily aim to amplify its essence. _Stream eddies_ tries out a naive idea that automatic classification might be able to detect and then distill that kind of essence by repeating the most characteristic sounds most often. Of course, the logic that the classifier imposes on the sonic world distorts and narrows it dramatically – in the case of this Google/IBM classifier, the taxonomy of labels and the training models come exclusively from an arbitrary set of YouTube videos. The software, then, while fairly effective in condensing a sparse incoming signal into more readily available sound, is more interesting as a way to _listen to machine listening_ in all its confused and reductive fervor.

I riffed on _stream eddies_ in a contribution to [_Flitr_](https://cachedmedia.bandcamp.com/album/flitr), a research initiative by [cached.media](https://cached.media/). (Many thanks to M. Sage for the inclusion.)

<iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=152145347/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/track=1918647130/transparent=true/" seamless><a href="https://cachedmedia.bandcamp.com/album/flitr">Flitr by Andy Stuhl</a></iframe>
<br/>

Here is an example of _stream eddies_ processing a slowly station-hopping FM radio in southwestern Ireland in 2019:

<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1073005525&color=%237b9ac3&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/andykstuhl" title="akstuhl" target="_blank" style="color: #cccccc; text-decoration: none;">akstuhl</a> · <a href="https://soundcloud.com/andykstuhl/stream-eddies-mizen-head-radio-scan" title="stream eddies - Mizen Head radio scan" target="_blank" style="color: #cccccc; text-decoration: none;">stream eddies - Mizen Head radio scan</a></div>
<br>

... a short example scanning the Montreal FM band (also 2019):

<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1077609292&color=%237b9ac3&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/andykstuhl" title="akstuhl" target="_blank" style="color: #cccccc; text-decoration: none;">akstuhl</a> · <a href="https://soundcloud.com/andykstuhl/stream-eddies-test-montreal-radio" title="stream eddies test - Montreal radio" target="_blank" style="color: #cccccc; text-decoration: none;">stream eddies test - Montreal radio</a></div>
<br>

... and an example where the input signal started with YouTube radio channel "Lo-Fi Beats to Study and Relax to" and switched to a very generic TED Talk:

<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/587221194&color=%237b9ac3&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/andykstuhl" title="akstuhl" target="_blank" style="color: #cccccc; text-decoration: none;">akstuhl</a> · <a href="https://soundcloud.com/andykstuhl/a-video-game-designer-and-a-heartland-conservative" title="a video game designer and a heartland conservative" target="_blank" style="color: #cccccc; text-decoration: none;">a video game designer and a heartland conservative</a></div>
