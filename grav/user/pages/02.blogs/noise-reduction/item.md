---
title: 'How to do noise reduction of Video files on Linux '
date: 17:34 06/27/2014 
taxonomy:
    category: blog
    tag: [noise-reduction, audacity, kdenlive]
---
**Step1 : Separating the Audio file**

ffmpeg -i input.file -vn -ac 2 -ar 44100 -ab 320k -f mp3 output.mp3

**Step2: Open the file in Audiocity to remove the white noise.**

https://www.youtube.com/watch?v=AeOjtMOq3EU

Installation: 
sudo add-apt-repository ppa:ubuntuhandbook1/audacity
sudo apt-get update sudo apt-get install audacity

===

**Step1 : Separating the Audio file**

ffmpeg -i input.file -vn -ac 2 -ar 44100 -ab 320k -f mp3 output.mp3

**Step2: Open the file in Audiocity to remove the white noise.**

https://www.youtube.com/watch?v=AeOjtMOq3EU

Installation: 
sudo add-apt-repository ppa:ubuntuhandbook1/audacity
sudo apt-get update sudo apt-get install audacity


**Step3: Use kdenlive to merge two vidoes.**
Installation:
sudo add-apt-repository ppa:sunab/kdenlive-release
sudo apt-get update && sudo apt-get install kdenlive


Search a tutorial in Youtube.[about merging the files it is simple drag and drop]


I used screen recording software called: SimpleScreen recorder. 
Installation:


sudo add-apt-repository ppa:maarten-baert/simplescreenrecorder sudo apt-get update sudo apt-get install simplescreenrecorder
