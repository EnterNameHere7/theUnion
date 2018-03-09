class Person{
	String Fname;
	String Sname;
	String id;

	Person(this.id,this.Fname,this.Sname);

	Map toJson() => {'id': id, 'Fname': Fname, 'Sname': Sname};
}