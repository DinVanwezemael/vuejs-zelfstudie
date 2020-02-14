class Form{

    constructor(data){
        this.originalData = data;


        for(let field in data){
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    data() {

        let data = {};

        for (let property in this.originalData){
            data[property] = this[property];

        }

        return data;
    }

    reset(vm){
        for(let field in originalData){
            this[field] = "";
        }
    }

    post(url){
        return this.submit('POST', url);
    }

    delete(url){
        return this.submit('DELETE', url);
    }

    submit(requestType, url){

        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
        .then(response => {
            this.onSucess(response.data);

            resolve(response.data);
        })
        .catch(error => {
            this.onFail(error.response.data);

            reject(error.ressponse.data);
        })
        .catch(this.onFail.bind(this));
        });

        
    }

    onSucess(response){
        alert(response.data.message);

        this.errors.clear();

        this.reset();
    }

    onFail(errors){
        this.errors.record(error.response);
    }
}

export default Form;