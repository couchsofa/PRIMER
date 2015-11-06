function printHelpCMD(term,i,cmd,txt1,txt2,txt3){
	term.print("["+i+"]"+"=".repeat(64))
	term.print(" ")
	term.print(cmd)
	term.print(" ")
	term.print(txt1)
	if (typeof txt2 !== 'undefined') {term.print(txt2)};
	if (typeof txt3 !== 'undefined') {term.print(txt3)};
	term.print(" ")
}

function printHelp(term){
	printHelpCMD(term,0,
		"ls [dir]",
		"outputs contents of [dir]",
		"prints contents of current directory if no [dir] is specified"
		)
	printHelpCMD(term,1,
		"cd [dir]",
		"changes the current directory to [dir]",
		"outputs current directory if no directory is specified"
		)
	printHelpCMD(term,2,
		"cat [file]",
		"displays the content of [file]"
		)
	printHelpCMD(term,3,
		"ps",
		"displays a list of running processes"
		)
	printHelpCMD(term,4,
		"whoami",
		"displays username"
		)
	printHelpCMD(term,5,
		"clear",
		"deletes terminal command history"
		)
	printHelpCMD(term,6,
		"connect [user]@[host]",
		"connects to a remote host using the credentials of user"
		)
	printHelpCMD(term,7,
		"hash [type] [file|string]",
		"prints the hash of a file or \"string\"",
		"supported hash functions are: ",
		"md5, sha256, sha1, whirlpool and crc32"
		)
	printHelpCMD(term,8,
		"encode|decode [type] [file|string]",
		"encodes/decodes the file or \"string\"",
		"supported encodings are: ",
		"uu, gz, base64 and rot13"
		)
	printHelpCMD(term,9,
		"enrypt|decrypt [file|string] [key]",
		"encrypts/decrypts the file or \"string\""
		)
	term.print(' ')
}
