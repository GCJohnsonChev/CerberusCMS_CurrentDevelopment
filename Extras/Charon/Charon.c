#include <conio.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <unistd.h>
#include <stdio.h>
#include <stdlib.h>
 
void main() {
	int Permissions;
	char* dirname = "";
	clrscr();
 
	Permissions = mkdir(dirname, 0777);

if (!Permissions) {

	printf("");

} else {

	printf("");
	exit(1);

}
 
	getch();
 
	system("dir");

	getch();

}