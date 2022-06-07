public class Account {
    Integer id;
    String name;
    String document;
    String email;
    String password;

    public Account(String name, String document, String email){
        this.name = name;
        this.document = document;
        this.email = email;
    }
    void printDataAccount() {
        System.out.println("Name: " + name);
        System.out.println("Document: " + document);
        System.out.println("Email: " + email);
    }
}
