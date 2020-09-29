import Axios from 'axios';

    export function fetch(url,params){
        if (params === null || params =='')
        {
            return Axios.get(url).then(function(resposne){
                return resposne;
            }).catch (function (error){
                data =  error;
            })
        }
        else
        {
            Axios.get(url,{params}).then(function(resposne){
                data =  resposne;
            }).catch (function (error){
                data =  error;
            })
        }
        return data;
    }

    export function update(url, param){
        Axios.patch(url,{param:this.data,data:this.data}).then(function(resposne){
            this.data = resposne;
        }).catch(function(error){
            this.data = error;
        })
        return this.data;
    }

    export function create(url,data){
        return Axios.post(url,{data:data}).then(function(resposne){
            return  resposne;
        }).catch(function(error){
            return  error;
        });
    }

    export function del (){
        Axios.delete(url,{pram:this.id}).then(function(response){
            return  resposne;
        }).catch(function(error){
            return error;
        })

    }
