<?php

use Illuminate\Database\Seeder;

class RoomtechTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomtech')->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "projector",
            'description' => "The projector system in most of the basement rooms of Norton has two inputs: HDMI(small and thin) and VGA(slightly larger). Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. If you are playing audio with video, try to use the HDMI input if possible, as this cable transmits both audio and video. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's volume and partly by the projector volume. Our suggestion: turn your computer volume up to 75% and the projector to 50%."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "video",
            'description' => "This room is equipped with both HDMI and VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "video",
            'description' => "This room does not support large-scale power usage. The plates on the wall are the only sources of power."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '11',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "projector",
            'description' => "This room contains an Extron room control system. The touch panel on the lecturn controls the projector and inputs. To turn the projector on, select Room Controls on the touch screen and then select from the Apple TV or wall jack inputs. Selection of eiter should turn the projector on for you. The wall jack inputs are automatic and will detect your computer. If you are connected but there is no video, check the cable in the wall to make sure it's inserted completely."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "extron",
            'description' => "This room comes with an Extron room controll system. To use the HDMI or VGA input, select room controls and touch the image that looks like the wall plate. The system will auto-detect which input you've chosen. If you would like to use the Apple TV, select the image that looks like an Apple TV."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "video",
            'description' => "This room is equipped with an Extron room control system. To display video, select either the HDMI or VGA inputs from the wall and select the wall plate icon in the Room Controls menu on the touch screen, or select the Apple TV icon and connect to the Apple TV."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "power",
            'description' => "This room does not support large-scale power usage. The plates on the wall are the only sources of power."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '12',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is stored in the lecturn. Access to this Apple TV is the same as the other basement rooms of Norton. If the Apple TV is unresponsive, a technician will have to reset it."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "projector",
            'description' => "Room 13 contains a short throw projector, situated right above the white board. You can connect to this projector the same way as many of the other rooms, by plugging your computer into the wall jack. If youa are plugged in and there is still no video (the screen will be blue), check the cable in the wall to make sure its plugged all the way in."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's volume and partly by the projector volume. Our suggestion: turn your computer volume up to 75% and the projector to 50%."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "video",
            'description' => "This room is equipped with VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "power",
            'description' => "This room does not support large-scale power usage. The plates on the wall are the only sources of power."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "adapter",
            'description' => "This room has a VGA video input. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '13',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "projector",
            'description' => "This room is like others in the basement of Norton, but unlike them this room does not have an HDMI input. If your computer does not have a VGA port built in, it will be necessary to check out an adapter. As well, VGA does not trasmit audio, so if you desire to play a video or any form of audio, make sure that the audio cable in the wall is plugged into your headphone jack."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "video",
            'description' => "This room is equipped with a VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "power",
            'description' => "This room does not support large-scale power usage. The plates on the wall are the only sources of power."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '17',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "projector",
            'description' => "This room contains a Crestron room controller. The touch screen on the lecturn powers on the projector, so you will not find a projector remote. To start the system, just select which input you'd like to use (House PC, HDMI, or VGA), and plug in your device."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "computer",
            'description' => "This room comes with Mac Mini that can be used to project on the screen. To log on, use your SBTS credentials (the same information you'd use to log on to your seminary issued laptop). The computer uses Windows 8, so some of the functions and locations may be different than what you're accustomed to. To access the smart board, launch WhiteBoard application from the desktop."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. If you are playing audio with video, try to use the HDMI input if possible, as this cable transmits both audio and video. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's output volume and partly by the volume on the Crestron touch screen. The touch screen will be muted by default. Ensure that mute is turned off and the volume is high."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "video",
            'description' => "This room is equipped with a Crestron room controller. Video options include HDMI, VGA, as well as a Mac Mini running Windows if you don't wish to bring your device. Select the input you desire from the touch screen and the projector will turn on automatically."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "power",
            'description' => "This room has power supplies built into the desks. If the power supplies are not working, please call or email Classroom Technology at extension 4007 or classroomtechnology@sbts.edu."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "crestron",
            'description' => "The touch screen installed on the lecturn is made by Crestron and is the controller for the technology in the room."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "appletv",
            'description' => "There is no Apple TV in this room. To connect, use the HDMI or VGA inputs, or use the House PC mounted in the lecturn and accessible through the Crestron system."
        ])->insert([
            'building' => 'Norton',
            'room' => '100200',
            'technology' => "smartboard",
            'description' => "The smart board in this room is connected to the House PC and can only be accessed by using that device. To use, login to the House PC with your SBTS credentials and open the White Board application from the Desktop. The smart board becomes the equivalent of a large mousepad and will register your touch, regardless of whether you use the accomanying plastic pens."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "projector",
            'description' => "This room contains two different projection systems. One is a Crestron, similar to the 100 classrooms in Norton. To start up, simply select the input you'd like from either HDMI or VGA (the touch screen includes House PC, but this is not functional). Selecting the input will turn the projectors on. Ensure that your computer is connected to one of the cables coming from the wooden lecturn and an image will appear after the projectors warm up. Unfortunately, this system does not have audio capability at this time. The other system projects direcly down the middle and includes audio. To start this system, plug your computer into the blue-tipped VGA cable coming from the metal cabinet and push the selector button until the light is on the side labeld Computer. For this system, you'll need the white projector remote to turn it on. The remote has two sections: one power button at the top to turn the speaker on and another section to power the projector."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "computer",
            'description' => "This classroom has a computer in the metal cabinet. To access and project, you must locate the input switcher near the audio mixer and push the button until Tablet is selected. Once you turn on the middle project with the remote, the image of the computer should display. You can log in to the computer using your SBTS credentials."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "audio",
            'description' => "This room can only handle audio playback through the central sound system. The Crestron, at the moment, is incapable of transmitting audio. If you desire to play audio, be sure to connect the audio cable coming from the sound mixer into your headphone jack, and check that volume is turned up on the speaker above the central projector."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "video",
            'description' => "There are two different projection systems in Norton 195. If you desire to write on the board, use the Crestron system mounted in the wooden lecturn. This system operates exactly like the rooms on Norton with similar technology, except that there is no House PC mounted in this room. To use the centrally located projector, connect your computer (with adapter if necessary) to the blue-tipped VGA cable and be sure that the selector is on laptop. Then turn the projector on with the white remote."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "power",
            'description' => "This room contains power pockets located variously throughout the floor in front of the seats."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '195',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "projector",
            'description' => "Room 203 is similar to the preaching labs in the basement, rooms 12 and 16. The projector is controlled by the touch panel on the wall. Make sure you select the Room Controls options at the bottom of the screen and select your input. If you desire to plug your device in, select the button that images a wall plate. If you desire to use the Apple TV, selec the image of the Apple TV."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "video",
            'description' => "This room is equipped with both HDMI and VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "power",
            'description' => "This room does not support large-scale power usage. The plates on the wall are the only sources of power."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '203',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "projector",
            'description' => "Room 208 contains a Crestron room controller like many other rooms in Norton. The touch screen on the lecturn powers on the projector, so you will not find a projector remote. To start the system, just select which input you'd like to use (House PC, HDMI, or VGA), and plug in your device. This room also comes with a gooseneck microphone for amplification. If you desire to use the microphone, find the mute button on the left side of the touch display and unselect it. Above that button is a volume control that will allow you to adjust your amplification."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "audio",
            'description' => "This room is equipped to handle audio playback. If you are playing audio with video, try to use the HDMI input if possible, as this cable transmits both audio and video. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's output volume and partly by the volume on the Crestron touch screen. The touch screen will be muted by default. Ensure that mute is turned off and the volume is high."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "video",
            'description' => "This room is equipped with a Crestron room controller. Video options include HDMI, VGA, as well as a Mac Mini running Windows if you don't wish to bring your device. Select the input you desire from the touch screen and the projector will turn on automatically."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "power",
            'description' => "This room contains power pockets located variously throughout the floor in front of the seats."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "appletv",
            'description' => "There is no Apple TV in this room. To connect, use the HDMI or VGA inputs, or use the House PC mounted in the lecturn and accessible through the Crestron system."
        ])->insert([
            'building' => 'Norton',
            'room' => '208',
            'technology' => "smartboard",
            'description' => "The Smart Board in this room is different from the others, in that it is not connected to the PC. Instead, it can be accessed from the internet on any device. On the bottom right of the board is a link to a website that can be searched, and on the website will appear a canvas that displays whatever is written on the board."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "tv",
            'description' => "This room contains a TV with an HDMI cable for you to plug into."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "computer",
            'description' => "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "screen",
            'description' => "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "audio",
            'description' => "This room is equipped with a TV for playback of video and audio. All audio playback must go through this TV or portable speakers must be used. The TV is equipped with an HDMI cable."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "video",
            'description' => "Room 232 is equipped with a TV and an HDMI cable. Connect your device with appropreiate adapter to the TV and select the HDMI 1 input."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "power",
            'description' => "This room does not support large-scale power usage. The plates on the wall are the only sources of power."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "dvd",
            'description' => "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Norton',
            'room' => '232',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is behind the TV. The TV should turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "projector",
            'description' => "The projector system in this room has a VGA cable for connecting. Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "computer",
            'description' => "There is no computer in this room. If you'd like to checkout a loaner laptop, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pressing the button located near the front of the room, on either side of white board."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "audio",
            'description' => "This room is equipped with a 3.5mm (1/8 in.) audio cable for playback. The playback speakers are built into the projector, so make sure to turn the volume up on both your device and on the projector. If you are plugged in and there is still no sound, check your sound preferences and select 'headphone' output."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "video",
            'description' => "This room is equipped with a VGA video cable for video playback. Ensure that the cable is plugged into your device and the projector is on the correct input. To change input, press 'Source Search' on the projector remote and the projector will automatically select the correct input. VGA only transmits video, so if you need sound, be sure to plug in the audio cable."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "power",
            'description' => "The only power option for this room is the wall jacks. Extension cords can occationally be found in nearby classroom, but there is no guarantee."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "dvd",
            'description' => "There is no native disc player in this room. If you'd like to check out a BluRay player, please call Classroom Technology at x4007."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "adapter",
            'description' => "This room has a VGA cable for video playback. If your device does not have VGA built-in, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Carver',
            'room' => '108',
            'technology' => "appletv",
            'description' => "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "projector",
            'description' => "This room is equipped with two flanking projectors, one for each side of the room. To use both, you must aim the remote at each one and press power. The image on each one will be identical."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "computer",
            'description' => "There is no computer in this classroom. If you need a loaner computer, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pushing the switch down, located near the front of the room."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "audio",
            'description' => "This room has a 3.5mm (1/8 in.) audio cable for playback. If the cable is plugged in and there is still no sound, check the audio settings on your device and make sure the selected output is 'headphones'."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "video",
            'description' => "This room is equipped with a VGA for video playback. If there is no image on the screen, check to make sure that the cable is plugged in all the way, or that you have the correct adapter. Also check the input to make sure you are on VGA. Pressing 'Source Search' with your device plugged in will automatically choose the correct input."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "power",
            'description' => "There are no large-sclae power options for this room. Power supplies may be located in nearby rooms, but there are no guarantees."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "dvd",
            'description' => "There is no native DVD player in the room, but a loaner BluRay player can be checked out from Classroom Technology, or a loaner laptop from Campus Technology."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "adapter",
            'description' => "If your computer does not have a VGA input, an adapter is necessary to connect your computer. You can call or stop by Classroom Technology to checkout the appropriate adapter."
        ])->insert([
            'building' => 'Rankin',
            'room' => '101',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted on top of the projector. Select the HDMI input on the projector and the Apple TV landing screen will appear. On an Apple device, select airplay (top bar, on the right for MacBook, swipe up menu on iPhone and iPad) and then select the correct room. A password will appear on the screen, which you must then input to your device."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "projector",
            'description' => "The projector in this room must be turned on with the white projector remote. It will show a blue searching screen if it does not detect an input. If it does not land on the correct input immediately, it will continue to cycle until it finds a source."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "computer",
            'description' => "There is no computer in this room."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "screen",
            'description' => "The screen controls for this room are stage right, in front of a wooden door that leads out of Crismon Hall."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "audio",
            'description' => "Audio for Crismon Hall is handled by the media amplifier in the metal cabinet, stage right. Make sure you change the media input on the amp, either with the black remote or by pressing the button on the device."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "video",
            'description' => "All video in Crismon Hall runs through the media amplifier in the metal rack, stage right. Use the black remote to change to the input you desire."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "power",
            'description' => "The desks in Crismon are equipped with electrical outlets. Toward the back of the room, some of the outlets are intentionally disconnected. Please do not attempt to reconfigure the electrical outlets on the desks."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "dvd",
            'description' => "Crismon does not have native DVD capabilities. Contact Classroom Technology if you'd like to check out a BluRay player, or Campus Technology for a loaner laptop."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "adapter",
            'description' => "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter."
        ])->insert([
            'building' => 'Library',
            'room' => 'Crismon Hall',
            'technology' => "appletv",
            'description' => "The Apple TV in Crismon is located in the metal rack, stage right. Be sure to change in the input on the media amp."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "computer",
            'description' => "The computer in the Curriculum boots like a regular computer and displays on the Smart Board."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "audio",
            'description' => "Audio playback in this room is isolated to the computer and smart board. If you would like extra speakers to use from a laptop, please contact Classroom Technology."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "video",
            'description' => "To play video in this room, login to the PC or plug in your own laptop to the smart board."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "power",
            'description' => "There is no large-scale power option for this room. Occationally a power supply can be found in nearby rooms."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "dvd",
            'description' => "The computer has a disc drive that can play your DVD. If you need BluRay, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "adapter",
            'description' => "If your laptop has an HDMI input, you can remove the HDMI from the back of the PC and plug it into your laptop. If your computer does not have HDMI built-in, you can check out an adapter from Classroom Technology."
        ])->insert([
            'building' => 'Library',
            'room' => 'Curriculum Lab',
            'technology' => "smartboard",
            'description' => "The smart board in this room powers on by pressing the button on the bottom left. If the device does not power on, confirm that the power cable is plugged in in the back."
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "tv",
            'description' => "This room is equipped with a TV and HDMI hookups. The HDMI input is located at the botom of the wall underneath the TV"
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "audio",
            'description' => "The HDMI cable used for video also transmits audio. If there is no sound, ensure that your audio setting say 'HDMI'."
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "video",
            'description' => "Video in this room is handled by the TV mounted on the wall, with an HDMI input found below the TV at the bottom of the wall. If you are plugged in and getting no video, check to see if you are on the correct input."
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "power",
            'description' => "There is no large-scale power option for this room. Occationally a power supply can be found in nearby rooms."
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "dvd",
            'description' => "This room does not have native disc playback capabilities. If you would like to check out a BluRay player, please contact Classroom Technology."
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "adapter",
            'description' => "If your laptop has an HDMI input, you can remove the HDMI from the back of the PC and plug it into your laptop. If your computer does not have HDMI built-in, you can check out an adapter from Classroom Technology."
        ])->insert([
            'building' => 'Library',
            'room' => 'Mullins Room',
            'technology' => "appletv",
            'description' => "The Apple TV in this room is mounted behind the TV. To use, select the airplay menu on your Apple device and choos 'Mullins Room'. Input the code that appears on the screen and you will connect. If the device is unresponsive, unplug it, wait a few seconds, and reinsert. This should reset the device for use."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "projector",
            'description' => "The projector system in this room has a VGA cable for connecting. Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "computer",
            'description' => "There is no computer in this room. If you'd like to checkout a loaner laptop, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pressing the button located near the front of the room, on either side of white board."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "audio",
            'description' => "This room is equipped with a 3.5mm (1/8 in.) audio cable for playback. The playback speakers are built into the projector, so make sure to turn the volume up on both your device and on the projector. If you are plugged in and there is still no sound, check your sound preferences and select 'headphone' output."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "video",
            'description' => "This room is equipped with a VGA video cable for video playback. Ensure that the cable is plugged into your device and the projector is on the correct input. To change input, press 'Source Search' on the projector remote and the projector will automatically select the correct input. VGA only transmits video, so if you need sound, be sure to plug in the audio cable."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "power",
            'description' => "The only power option for this room is the wall jacks. Extension cords can occationally be found in nearby classroom, but there is no guarantee."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "dvd",
            'description' => "There is no native disc player in this room. If you'd like to check out a BluRay player, please call Classroom Technology at x4007."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "adapter",
            'description' => "This room has a VGA cable for video playback. If your device does not have VGA built-in, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Cooke',
            'room' => '8',
            'technology' => "appletv",
            'description' => "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "projector",
            'description' => "The projector system in this room has a VGA cable for connecting. Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "computer",
            'description' => "There is no computer in this room. If you'd like to checkout a loaner laptop, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pressing the button located near the front of the room, on either side of white board."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "audio",
            'description' => "This room is equipped with a 3.5mm (1/8 in.) audio cable for playback. The playback speakers are built into the projector, so make sure to turn the volume up on both your device and on the projector. If you are plugged in and there is still no sound, check your sound preferences and select 'headphone' output."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "video",
            'description' => "This room is equipped with a VGA video cable for video playback. Ensure that the cable is plugged into your device and the projector is on the correct input. To change input, press 'Source Search' on the projector remote and the projector will automatically select the correct input. VGA only transmits video, so if you need sound, be sure to plug in the audio cable."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "power",
            'description' => "The only power option for this room is the wall jacks. Extension cords can occationally be found in nearby classroom, but there is no guarantee."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "dvd",
            'description' => "There is no native disc player in this room. If you'd like to check out a BluRay player, please call Classroom Technology at x4007."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "adapter",
            'description' => "This room has a VGA cable for video playback. If your device does not have VGA built-in, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Cooke',
            'room' => '221',
            'technology' => "appletv",
            'description' => "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "projector",
            'description' => "The projector system in this room has a VGA cable for connecting. Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "computer",
            'description' => "There is no computer in this room. If you'd like to checkout a loaner laptop, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pressing the button located near the front of the room, on either side of white board."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "audio",
            'description' => "This room is equipped with a 3.5mm (1/8 in.) audio cable for playback. The playback speakers are built into the projector, so make sure to turn the volume up on both your device and on the projector. If you are plugged in and there is still no sound, check your sound preferences and select 'headphone' output."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "video",
            'description' => "This room is equipped with a VGA video cable for video playback. Ensure that the cable is plugged into your device and the projector is on the correct input. To change input, press 'Source Search' on the projector remote and the projector will automatically select the correct input. VGA only transmits video, so if you need sound, be sure to plug in the audio cable."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "power",
            'description' => "The only power option for this room is the wall jacks. Extension cords can occationally be found in nearby classroom, but there is no guarantee."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "dvd",
            'description' => "There is no native disc player in this room. If you'd like to check out a BluRay player, please call Classroom Technology at x4007."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "adapter",
            'description' => "This room has a VGA cable for video playback. If your device does not have VGA built-in, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Cooke',
            'room' => '224',
            'technology' => "appletv",
            'description' => "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "projector",
            'description' => "The projector system in this room has a VGA cable for connecting. Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "computer",
            'description' => "There is no computer in this room. If you'd like to checkout a loaner laptop, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pressing the button located near the front of the room, on either side of white board."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "audio",
            'description' => "The audio system in this room is maintained by Event Media. There is an andio mixer and input selecter mounted in the front of the room."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "video",
            'description' => "Video playback in this room is handled by the projector mounted in the rafters or by the Promethean smart board."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "power",
            'description' => "The only power option for this room is the wall jacks. Extension cords can occationally be found in nearby classroom, but there is no guarantee."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "dvd",
            'description' => "There is no native disc player in this room. If you'd like to check out a BluRay player, please call Classroom Technology at x4007."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "adapter",
            'description' => "This room has a VGA cable for video playback. If your device does not have VGA built-in, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "appletv",
            'description' => "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'CCRH',
            'technology' => "smartboard",
            'description' => "The smartboard in this room is a Promethean board that can be plugged into or streamed by both Apple and Android devices."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "projector",
            'description' => "The projector system in this room has a VGA cable for connecting. Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "computer",
            'description' => "There is no computer in this room. If you'd like to checkout a loaner laptop, please contact Campus Technology at x4006."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "screen",
            'description' => "The screen in this room descends from the ceiling by pressing the button located near the front of the room, on either side of white board."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "audio",
            'description' => "This room is equipped with a 3.5mm (1/8 in.) audio cable for playback. The playback speakers are built into the projector, so make sure to turn the volume up on both your device and on the projector. If you are plugged in and there is still no sound, check your sound preferences and select 'headphone' output."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "video",
            'description' => "This room is equipped with a VGA video cable for video playback. Ensure that the cable is plugged into your device and the projector is on the correct input. To change input, press 'Source Search' on the projector remote and the projector will automatically select the correct input. VGA only transmits video, so if you need sound, be sure to plug in the audio cable."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "power",
            'description' => "The only power option for this room is the wall jacks. Extension cords can occationally be found in nearby classroom, but there is no guarantee."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "dvd",
            'description' => "There is no native disc player in this room. If you'd like to check out a BluRay player, please call Classroom Technology at x4007."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "adapter",
            'description' => "This room has a VGA cable for video playback. If your device does not have VGA built-in, please contact Classroom Technology to check one out."
        ])->insert([
            'building' => 'Cooke',
            'room' => 'IRH',
            'technology' => "appletv",
            'description' => "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
        ]);
    }
}
