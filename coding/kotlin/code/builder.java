class Builder {
    int a;
    int b;
    String c;

    Builder setA(int a) {
        this.a = a;
        return this;
    }

    Builder setB(int b) {
        this.b = b;
        return this;
    }

    Builder setC(String c) {
        this.c = c;
        return this;
    }
}

static Builder buildExample() {
    Builder builder = new Builder();
    int i = 0;
    builder.setA(i);
    i+=5;
    return builder.setB(i).setC("Done");
}