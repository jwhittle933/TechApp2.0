import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

export default new Vuex.Store ({
    state: {
        roomTech: {
            Norton: {
                "room11": {
                    "Projector": "The projector system in most of the basement rooms of Norton has two inputs: HDMI(small and thin) and VGA(slightly larger). Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped to handle audio playback. If you are playing audio with video, try to use the HDMI input if possible, as this cable transmits both audio and video. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's volume and partly by the projector volume. Our suggestion: turn your computer volume up to 75% and the projector to 50%.",
                    "Video": "This room is equipped with both HDMI and VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input.",
                    "Power": "This room does not support large-scale power usage. The plates on the wall are the only sources of power.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
                },
                "room12": {
                    "Projector": "This room contains an Extron room control system. The touch panel on the lecturn controls the projector and inputs. To turn the projector on, select Room Controls on the touch screen and then select from the Apple TV or wall jack inputs. Selection of eiter should turn the projector on for you. The wall jack inputs are automatic and will detect your computer. If you are connected but there is no video, check the cable in the wall to make sure it's inserted completely.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Extron": "",
                    "Audio": "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable.",
                    "Video": "This room is equipped with an Extron room control system. To display video, select either the HDMI or VGA inputs from the wall and select the wall plate icon in the Room Controls menu on the touch screen, or select the Apple TV icon and connect to the Apple TV.",
                    "Power": "This room does not support large-scale power usage. The plates on the wall are the only sources of power.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is stored in the lecturn. Access to this Apple TV is the same as the other basement rooms of Norton. If the Apple TV is unresponsive, a technician will have to reset it."
                },
                "room13": {
                    "Projector": "Room 13 contains a short throw projector, situated right above the white board. You can connect to this projector the same way as many of the other rooms, by plugging your computer into the wall jack. If youa are plugged in and there is still no video (the screen will be blue), check the cable in the wall to make sure its plugged all the way in.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable.",
                    "Video": "This room is equipped with both HDMI and VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input.",
                    "Power": "This room does not support large-scale power usage. The plates on the wall are the only sources of power.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
                },
                "room17": {
                    "Projector": "This room is like others in the basement of Norton, but unlike them this room does not have an HDMI input. If your computer does not have a VGA port built in, it will be necessary to check out an adapter. As well, VGA does not trasmit audio, so if you desire to play a video or any form of audio, make sure that the audio cable in the wall is plugged into your headphone jack.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable.",
                    "Video": "This room is equipped with a VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input.",
                    "Power": "This room does not support large-scale power usage. The plates on the wall are the only sources of power.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
                },
                "room100200": {
                    "Projector": "This room contains a Crestron room controller. The touch screen on the lecturn powers on the projector, so you will not find a projector remote. To start the system, just select which input you'd like to use (House PC, HDMI, or VGA), and plug in your device.",
                    "Computer": "This room comes with Mac Mini that can be used to project on the screen. To log on, use your SBTS credentials (the same information you'd use to log on to your seminary issued laptop). The computer uses Windows 8, so some of the functions and locations may be different than what you're accustomed to. To access the smart board, launch WhiteBoard application from the desktop.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped to handle audio playback. If you are playing audio with video, try to use the HDMI input if possible, as this cable transmits both audio and video. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's output volume and partly by the volume on the Crestron touch screen. The touch screen will be muted by default. Ensure that mute is turned off and the volume is high.",
                    "Video": "This room is equipped with a Crestron room controller. Video options include HDMI, VGA, as well as a Mac Mini running Windows if you don't wish to bring your device. Select the input you desire from the touch screen and the projector will turn on automatically.",
                    "Power": "This room has power supplies built into the desks. If the power supplies are not working, please call or email Classroom Technology at extension 4007 or classroomtechnology@sbts.edu.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "There is no Apple TV in this room. To connect, use the HDMI or VGA inputs, or use the House PC mounted in the lecturn and accessible through the Crestron system.",
                    "Smart Board": "The smart board in this room is connected to the House PC and can only be accessed by using that device. To use, login to the House PC with your SBTS credentials and open the White Board application from the Desktop. The smart board becomes the equivalent of a large mousepad and will register your touch, regardless of whether you use the accomanying plastic pens."
                },
                "room195": {
                    "Projector": "This room contains two different projection systems. One is a Crestron, similar to the 100 classrooms in Norton. To start up, simply select the input you'd like from either HDMI or VGA (the touch screen includes House PC, but this is not functional). Selecting the input will turn the projectors on. Ensure that your computer is connected to one of the cables coming from the wooden lecturn and an image will appear after the projectors warm up. Unfortunately, this system does not have audio capability at this time. The other system projects direcly down the middle and includes audio. To start this system, plug your computer into the blue-tipped VGA cable coming from the metal cabinet and push the selector button until the light is on the side labeld Computer. For this system, you'll need the white projector remote to turn it on. The remote has two sections: one power button at the top to turn the speaker on and another section to power the projector.",
                    "Computer": "This classroom has a computer in the metal cabinet. To access and project, you must locate the input switcher near the audio mixer and push the button until Tablet is selected. Once you turn on the middle project with the remote, the image of the computer should display. You can log in to the computer using your SBTS credentials.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room can only handle audio playback through the central sound system. The Crestron, at the moment, is incapable of transmitting audio. If you desire to play audio, be sure to connect the audio cable coming from the sound mixer into your headphone jack, and check that volume is turned up on the speaker above the central projector.",
                    "Video": "There are two different projection systems in Norton 195. If you desire to write on the board, use the Crestron system mounted in the wooden lecturn. This system operates exactly like the rooms on Norton with similar technology, except that there is no House PC mounted in this room. To use the centrally located projector, connect your computer (with adapter if necessary) to the blue-tipped VGA cable and be sure that the selector is on laptop. Then turn the projector on with the white remote.",
                    "Power": "This room contains power pockets located variously throughout the floor in front of the seats.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
                },
                "room203": {
                    "Projector": "Room 203 is similar to the preaching labs in the basement, rooms 12 and 16. The projector is controlled by the touch panel on the wall. Make sure you select the Room Controls options at the bottom of the screen and select your input. If you desire to plug your device in, select the button that images a wall plate. If you desire to use the Apple TV, selec the image of the Apple TV.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped to handle audio playback. The volume is controlled by the Extron touch screen on the lecturn and the volume on your computer. If you are playing audio along with video, be sure that you are using the HDMI input. If you are just playing audio or are using the VGA cable, be sure to connect the accompanying audio cable.",
                    "Video": "This room is equipped with both HDMI and VGA video input. In order to display your screen, make sure that you have the appropriate adapter for your device, turn the projector on with the remote, and make sure that the projector is on the correct input chanel. To select the correct chanel, press the button labeled Source Search and the projector will automatically select your input.",
                    "Power": "This room does not support large-scale power usage. The plates on the wall are the only sources of power.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is mounted above the projector. The projector often will turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
                },
                "room208": {
                    "Projector": "Room 208 contains a Crestron room controller like many other rooms in Norton. The touch screen on the lecturn powers on the projector, so you will not find a projector remote. To start the system, just select which input you'd like to use (House PC, HDMI, or VGA), and plug in your device. This room also comes with a gooseneck microphone for amplification. If you desire to use the microphone, find the mute button on the left side of the touch display and unselect it. Above that button is a volume control that will allow you to adjust your amplification.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped to handle audio playback. If you are playing audio with video, try to use the HDMI input if possible, as this cable transmits both audio and video. If you are just playing audio or are using the VGA, be sure to plug the audio cable into your headphone jack. The volume is controlled partly by your computer's output volume and partly by the volume on the Crestron touch screen. The touch screen will be muted by default. Ensure that mute is turned off and the volume is high.",
                    "Video": "This room is equipped with a Crestron room controller. Video options include HDMI, VGA, as well as a Mac Mini running Windows if you don't wish to bring your device. Select the input you desire from the touch screen and the projector will turn on automatically.",
                    "Power": "This room contains power pockets located variously throughout the floor in front of the seats.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "There is no Apple TV in this room. To connect, use the HDMI or VGA inputs, or use the House PC mounted in the lecturn and accessible through the Crestron system.",
                    "Smart Board": "The Smart Board in this room is different from the others, in that it is not connected to the PC. Instead, it can be accessed from the internet on any device. On the bottom right of the board is a link to a website that can be searched, and on the website will appear a canvas that displays whatever is written on the board."
                },
                "room232": {
                    "Projector": "This room contains a TV with an HDMI cable for you to plug into.",
                    "Computer": "This room does not come equipped with a computer. If you are having trouble with your seminary issued computer, please contact the help desk at x4006 during working hours.",
                    "Screen": "The screens in every room descend by pushing the toggle switch down. It is located near one of the doors. If you cannot get your computer to display properly, please select Projector from the drop menu and read the room info.",
                    "Audio": "This room is equipped with a TV for playback of video and audio. All audio playback must go through this TV or portable speakers must be used. The TV is equipped with an HDMI cable.",
                    "Video": "Room 232 is equipped with a TV and an HDMI cable. Connect your device with appropreiate adapter to the TV and select the HDMI 1 input.",
                    "Power": "This room does not support large-scale power usage. The plates on the wall are the only sources of power.",
                    "DVD": "There is no native disc playback in this room. If you'd like to play a DVD or Blu Ray disc, please contact Classroom Technology to borrow a Blu Ray player of Campus Technology for a loaner laptop. If your device has a DVD player built-in, connect to the Crestron system (preferably through the HDMI) and insert the disc.",
                    "Adapter": "This room has HDMI and VGA video inputs. If your device does not have built-in capabilities with these cables, please see Classroom Technology for an adapter.",
                    "Apple TV": "The Apple TV in this room is behind the TV. The TV should turn on and default to the Apple TV input. Follow the instructions on the screen to connect. If the Apple TV is unresponsive, uplug the power cord from the back, wait a few seconds, and reinsert."
                }
            },
            Carver: {
                "108": {
                    "Projector": "The projector system in this room has two inputs: HDMI(small and thin) and VGA(slightly larger). Check the wall jack to make sure that it has not been damaged. These rooms also reqire a remote to power on the projector. If one is not present, check the surrounding rooms as there is sure to be one present. Also, you may reach up and manually push the power button on the remote. The Campus Technology office is upstairs on the main hallway and if anyone is there, they may be able to help you.",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "There is an Apple TV mounted on top of the projector. Press Source Search on the projector remote to select the HDMI input. On your Apple device, select airplay and the appropriate room number, then input the password that appears on the projector screen. Occationally, when an Apple TV sits idle for too long, it needs to be restarted. Remove the power cable from the back, wait a few seconds, and reinsert. The device should boot back up."
                }
            },
            Rankin: {
                "101": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "201": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                }
            },
            Library: {
                "Crismon Hall": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "Curriculum Lab": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "Mullins Room": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                }
            },
            Cooke: {
                "8": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "221": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "224": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "CCRH": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                },
                "IRH": {
                    "Projector": "",
                    "Computer": "",
                    "Screen": "",
                    "Audio": "",
                    "Video": "",
                    "Power": "",
                    "DVD": "",
                    "Adapter": "",
                    "Apple TV": "",
                    "Smart Board": ""
                }
            }
        },
        formSelections: {
            buildingSelection: "",
            roomSelection: "",
            problemSelection: ""
        }
    },
    getters: {
        getNorton: (state) => state.roomTech.Norton,
        getCarver: (state) => state.roomTech.Carver,
        getRankin: (state) => state.roomTech.Rankin,
        getLibrary: (state) => state.roomTech.Library,
        getCooke: (state) => state.roomTech.Cooke
    },
    mutations: {
        setBuildingChoice(state, selection){
            state.formSelections.buildingSelection = selection;
        }, //FormsComponent >>this.$store.commit('setBuildingChoice', payload)
        setRoomChoice(state, selection){
            state.formSelections.roomSelection = selection;
        }, //FormsComponent >>this.$store.commit('setRoomChoice', payload)
        setProblemChoice(state, selection){
            state.formSelections.problemSelection = selection;
        } //FormsComponent >>this.$store.commit('setProblemChoice', payload)
    }
})