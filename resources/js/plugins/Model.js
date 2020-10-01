import { http } from './axios.js';

export default class Model {

    constructor(url, id, params) {
        this.http = http;
        this.pendingRequest = null;
        this.loading = false;
        this.url = url;
        this.id = id;
        this.params = params;
    }


    checkUrl(url) {
        if (url) {
            this.url = url;
        }
    }


    async fetch(url, params) {

        this.checkUrl(url); 
        this.loading = true;
        return new Promise(async (resolve, reject) => {
            try {
                let result = await http.get(this.url, params);
                resolve(result);
            } catch (error) {
                if (!this.http.isCancel(error)) {
                    reject(error);
                }
            }finally {
                this.loading = false;
            }
        });

    
    }
    
    update(url,id,data){
        return this.http.patch(url.concat('/',id),data).then(function(resposne){
            return  resposne;
        }).catch(function(error){
            return  error;
        })
    }
    
    create(url,data){
        return  this.http.post(url,data).then(function(resposne){
            return  resposne;
        }).catch(function(error){
            return  error;
        });
    
    
    }
    
    delete (url,id){
        return http.delete(url.concat('/',id)).then(function(response){
            return  resposne;
        }).catch(function(error){
            return error;
        })
    
    }
    
    dataspliter(resultData){
        let list = resultData.data.data;
        let pages ={
            current_page:    resultData.data.current_page,
            first_page_url:  resultData.data.first_page_url,
            last_page:      resultData.data.last_page,
            last_page_url:  resultData.data.last_page_url,
            next_page_url:  resultData.data.next_page_url,
            per_page:       resultData.data.per_page,
            prev_page_url:  resultData.data.prev_page_url,
            path:   resultData.data.path,
            from:   resultData.data.from,
            to:     resultData.data.to,
            total:  resultData.data.total
        }
        return {list,pages};
    
    }
    
    DataAnalyzer(){
    //  this.renderChart
    }
    
        

}