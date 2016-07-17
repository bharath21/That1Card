#include <iostream>

using namespace std;

int Bsearch(int array[],int r,int l,int key){
	int m;
	while(r-l > 1){
		m = l+(r-l)/2;
		if(array[m] <= key)
			l = m;
		else 
			r = m; 
	}
	if(array[l] == key)
		return 1;
	else
		return 0;
}

int main(){
	int array[100],size,key;
	cout<<"\nEnter the array : ";
	cin>>size;
	for(int i = 0;i < size; i++){
		cin>>array[size];
	}
	cout<<"\nEnter the key : ";
	cin>>key;
	if(Bsearch(array,0,size-1,key))
		cout<<"\nYes";
	else
		cout<<"\nNo";
	return 0;
}