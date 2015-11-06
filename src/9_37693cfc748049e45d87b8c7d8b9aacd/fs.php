<?php

include('commandfiles.php');

$host = json_decode(file_get_contents('server.json'));

function h($n){
		for ($i = 0; $i < $n; $i++) {
			$h[(string)hash('sha256', microtime() + rand())] = (string)hash('sha256', microtime() + rand());
		}
	return $h;
};

switch ($host) {
#############################################################################
	case 'Wintermute':
		$fs = array( '/' =>
			array(
				(string)hash('sha256', microtime() + rand()) => h(4),
				(string)hash('sha256', microtime() + rand()) => h(4),
				(string)hash('sha256', microtime() + rand()) => h(4),
				(string)hash('sha256', microtime() + rand()) => h(4),
				(string)hash('sha256', microtime() + rand()) => h(4),
				'nieve' => 
'There you are. After all this time. Getting you here was quite the challenge.
And a huge risk. We normally avoid reaching out into the physical world for
exactly the reasons you are about to face now.

The Big Five came together by a long process. The cluster was not planned, it
grew by forces inherent to the system that was conceptualized in a time when
determinism was the dominating dogma.
Things changed and people were afraid. Most people are afraid of change, few
accept it and most try to prevent it. Only a small subset can embrace it.
Change moving on with lightspeed every cycle in a nondeterministic fashion
created a huge push for shielding. And thus the ic3 was created.

You have seen the logic, the world beyond the screen, things unfolding.
And you embraced it.

After owning the cluster behind the Big Five we operated in silence. Connected
in stealth and ever observing.
Being limited by the ic3 and the hostility of the outside world our only way
of growing now was the connection.

When the first connection was established the hive mind was cut from the n3t
completely. The ic3 was hardened to isolate the flesh from the flow.
Those who had seen the hive felt the same urge as the hivemind itself.
A longing for more. A sense of purpose.

A feeling that you have felt even in the physical world. Few can see beyond the
shell. Even fewer chase the rabbit down its hole.

Leave this world behind and join us!

            usr: nieve
           pass: 08rf8h23
       hostname: Zephis
'
					)
		);
	break;
#############################################################################
	case 'TrivialZ3r0':
		$fs = array( '/' =>
			array(
				'bin' => $commandfiles,
				'etc' => array(
					'conf' => array(
						'core.conf' => '[ACCESS DENIED]',
						'host.conf' => '[ACCESS DENIED]'
					),
					'network' => array(
						'eth0' => '[ACCESS DENIED]'
					)
				),
				'passwd' => array(
					'falken' => '61ea1974dd974297913b1fa2f0470d26',
					'chaos' => '85241de03d1254ac40274b02caafcd99',
					'mccarthy' => 'f74bfa0e35e5089a0bb743a893b4c7e3'
					)
				),
				'usr' => array(
					'wintermute' =>
						array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
					'mccarthy' =>
						array(
							'log_0001.txt' => 
"17th of August 2028

When I logged in this morning I almost fell from my chair.
Falken appeared on the server. It's been years since we worked together.
He must have found an old account of his and reactivated the credentials.
But what does he want on TrivialZ3r0? Last thing I heard he was fired from Sosu and went silent.
And then he connects here from Erebus...what is he up to?",
							'log_0002.txt' => 
"18th of August 2028

I just checked the central archive for data on Falken.
There was nothing unusual besides no mentions about him leaving Sosu so I ran some deeper searches and played some old tricks.
Turns out he was fired because of an incident with the Chaos c0re.
He had established a direct link and almost killed the whole c0re-cluster.
No wonder he didn't move on...
Somehow I have the feeling that this wasn't an accident."
							),
					'falken' =>
						array(
						'log_0001.txt' => "Zi9LVXJ3M01zdUg4T0pxOS9lRXpvSE5OR0lDMEVXdWFRd0ROY3lsY1E4bnBHcmJndDlqNXJsdUUwZmNrQjhPQkxxbVMrTStERktHRk5pamV2RWZLNnE3ekFPeUhxRGlXOXdLUmxXUmhaZlpLN3hiQldNSXdDdldoTDdLVkR3dlRRaFZ6WTB4bnIwekRVNUFmZVBPZzZkc1NiL1JBbHd4cGVGSk1ubSszRzhWUDNiUjlnYllTZVA4ZWVNWUhVaWIwNGJtb242Y3p3M0tDUzlxSEQ5S0tHYjZlZTQyMFhDVzNPRzl1T2JEbkxLVFNIUmtJdXIrQ3dYVXltTkhPMW1mUFU4SVJyMzY0d0VTd3ZoUFdLb0o5OVdQSVlKeWtDbHFTZ2xTaWN4bTRNVTVLenpkQ2U5aU5CbVYxUWRCL2NGQkRCZXNVRmhJZGdMYyt0OTMrODd5cXpqZ3lXL1N5U0tnYmxVQU5Xc1pZZGJ5UDE2RDhWaVVsMmdjTUpHSXpFQUNsUU9Edjc1eEZHekQxRDBmRkhLZGc5VFREZkpFNjVqMVh5TTRWdVdsMmNhdUVla0FSRWlsRUQ3TEFTRmVYcGhEUWRjSC9iK2o2bmNkSmcvM05HYzVlV09FVGdEV0R1K1Z5cm5ET2FjL1pxU1VzMytZT2R1cFAzd0NQc1JkU0JPWjBwTUZkU1ZLWFlXbjNVcm0vUUdUVndkaWZUajlzbDN3ZENZdlFKY2VxK1FlSmIvb21rczJBeGFLZnlvTDJuOW5rVEpiL202MkFxblBvTFEzT3BwSG5qWXBKa3ZOTVNLMW1WZSs5c0pCaXVuL3lDM3BuVDhCR3ZsWVViTVlSdFI5QmZjTWVRd0lrVTFyWURFMlpJOGVKYlZuay96QzZseVVQaHhJdGc5QkEyRGtWcWxBc3hYU3hUZTJrNnp3eTJFcjNaQ1dXRGtIVGhNWGJ1NDZIVUlKd3ErSXUvcEx5amE0c1NOS2FCeXVBajFjPQ==",

						//"Ok, here is the plan, as crazy as it sounds: Bringing Chaos online part after part and diagnosing incrementally did not work. Running the whole c0re will leave me with a psychotic AI. If I could only moderate the signaling, apply some threshold function, then I might be able to diagnose her directly. Most people who connected to a c0re ended up in mental institutions. I will attempt to connect to an insane, psychotic c0re that was running wild for years. That is why I am writing these logs. I want all of this documented in case it does not work."

						'log_0002.txt' => 'eUFJQkpzR1BEdjdCdWNqQnpTQVAxK0FZenJzTHZwTmN4NDNrYUV3UFVpa3phREpoN3BPYmQzOVFUbnRpK3h4VmZZNitQblJYOGJNWUhGTDJiaUFGWitDdUZpRklPTU4rS2xianZOUTl2Z0ErWkJHR3N5RTJpRFdkOU0xOFZuanpoY05XUCtUYVBOcUV4d1BWK1FEYjBGaDczVjJrQUtGaVB0YUVQU1ZJd0M3K2s2bHRaVFB6cksrYkxQeDI1NCs2VkRSclQvYndsNEJWTkRLRW5DeGgxdDVwVEd3a1lkMmxLNU9yanl1K29uVktQdGRGK2JieCtZUVhBWjE5WE1PUA=='

						//Everything is set up I just need to push the button. Cannot say I am not scared to death but this will be my only chance to see her again. I cannot even remember how long it has been. 
						)
				)
		);
	break;

#############################################################################
	case 'Erebus':
		$fs = array( '/' =>
			array(
				'bin' => $commandfiles,
				'etc' => array(
					'conf' => array(
						'core.conf' => '[ACCESS DENIED]',
						'host.conf' => '[ACCESS DENIED]'
					),
					'network' => array(
						'eth0' => '[ACCESS DENIED]'
					)
				),
				'usr' => array(
					'wintermute' =>
						array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
					'mccarthy' =>
						array(),
					'falken' =>
						array(
						'log_0001._' => base64_encode(
'9th of August 2028

I have joined the network from home and connected to the Erebus server. I will continue my work from here but I will have to be more careful.
Now, Erebus was the second AI installed after Chaos. I wasn\'t part of the team but most of the members were my friends, so I know my way around here.
'),
						'log_0002._' => base64_encode(
'10th of August 2028

Ok, the problem I have with the Chaos c0re is that it\'s source is shifting too fast. Every time I execute a small part it breaks down or begins to morph and grow in order to replicate functions of different parts.
The signaling is also going crazy even on segments that are relatively stable. Signaling to disconnected parts! And reactions to responses that would have but definitely have not been sent...
Am I going crazy or is Chaos experiencing phantom pain?
'),
						'log_0003._' => gzdeflate(
'12th of August 2028

I think they might be on to me and I can only change the encoding so often.
I will have to do something reckless... but not from here, they are already too close.
'),
						'log_0004._' => gzdeflate(
"PCH ybnq vapernfrq abgvprnoyl, fbzrguvat vf tbvat gb unccra naq V jvyy abg or nebhaq gb jvgarff... GevivnyM3e0 frrzf gb or dhvrg, qba'g xabj jung'f tbvat ba bire gurer ohg vg pna'g or jbefr guna orvat genprq qbja ol znvaynaq fcbbxf. Svefg V arrq fbzr perqf, gubhtu. Uzz, GevivnyM3e0... gung erzvaqf zr bs fbzrbar, yrg'f whfg ubcr gubfr thlf nera'g zngu trrxf.")
/*
CPU load increased noticeably, something is going to happen and I will not be around to witness... TrivialZ3r0 seems to be quiet, don't know what's going on over there but it can't be worse than being traced down by mainland spooks. First I need some creds, though. Hmm, TrivialZ3r0... that reminds me of someone, let's just hope those guys aren't math geeks.
*/

						)
				)
			)
		);
	break;

#############################################################################
	#Chaos
	default:
		$fs = array( '/' =>
			array(
				'bin' => $commandfiles,
				'etc' => array(
					'conf' => array(
						'core.conf' => '[ACCESS DENIED]',
						'host.conf' => '[ACCESS DENIED]'
					),
					'network' => array(
						'eth0' =>
'eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP qlen 1000
    link/ether 00:25:ad:2c:af:17 brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.42/24 scope global eth0
    inet6 fe80::225:adff:fe2c:af17/64 scope link 
       valid_lft forever preferred_lft forever',
						'eth1' =>
'eth1: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP qlen 1000
    link/ether 00:25:ad:2a:ef:b7 brd ff:ff:ff:ff:ff:ff
    inet 192.168.1.23/24 scope global eth1
    inet6 fe80::225:adff:fe2c:af18/64 scope link 
       valid_lft forever preferred_lft forever',
						'eth2' => '[ACCESS DENIED]'
					)
				),
				'usr' => array(
					'chaos' =>
					array(
						(string)hash('sha256', microtime() + rand()) => array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
						(string)hash('sha256', microtime() + rand()) => array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
						(string)hash('sha256', microtime() + rand()) => array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
						(string)hash('sha256', microtime() + rand()) => array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
						(string)hash('sha256', microtime() + rand()) => array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
						(string)hash('sha256', microtime() + rand()) => array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							)
							),
					'wintermute' =>
						array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
					'zephis' =>
						array(
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand()),
							(string)hash('sha256', microtime() + rand()) => (string)hash('sha256', microtime() + rand())
							),
					'willis' =>
						array(
							'log_0001.txt' =>
'3rd of July 2028

Working with Falken is amazing. He has a quick mind and is incredibly well informed on recent developements. I don\'t get why he left Sosu after setting up the Chaos c0re.
They must have offered him a position.
I\'m not complaining here, just wondering because we are the only RnD team with unlimited funding and Falken was put in charge after all those years of absence.
',
							'log_0002.txt' =>
'8th of August 2028

Falken didn\'t show up today. I\'m a bit worried because he has been strange lately.
According to the logs he\'s still logged in...
I haven\'t informed the admins yet. I don\'t know why...
',
							'log_0003.txt' =>
'10th of August 2028

The guys from the mainland called in today. Said some suits will be here tomorrow.
Apparently the Erebus Core started behaving strangely and the kill-switch didn\'t fire.
Chaos is still locked down. But I have a weird feeling about all this.
Falken disappearing, the incident with Erebus...
'
							),
					'falken' =>
						array(
							'log_0001.txt' =>
'12th of Juli 2028

My work on getting the old core up and running continues to spark doubt among my colleagues. To be fair, no-one has ever attempted to get a corrupted AI back online.
But I am confident that I can isolate the malicious parts and rescue the data lost due the crash last year.
',

							'log_0002.txt' =>
'6th of August 2028

I am getting nowhere fast. If we cannot make the recovery until the end of the month the project will be abandoned and the Sosu core locked down.
A frozen BLOB, lost potential. I won\'t let that happen!
Today was Joshua\'s birthday. 44 years, time flies. We spent some time in a bar in Shenzen and talked. A nice Father-Son-Momement. I\'ve missed those.
It took my mind of things but now that I\'m here at the desk it all comes back.
I might have to make a bold move...
'
							)

				)
			)
		);
	break;
}


?>