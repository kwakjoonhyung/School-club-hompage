const tagIsEmpty = tag => {
    if (tag == undefined || tag == " " || tag.length <= 1) {
        alert("태그가 비어있습니다.");
        return false;
    }
    return true;
};

let taglist=[];

const makeTag = tag => {
    const tagWrap = document.createElement("div");
    tagWrap.className = "tag";
    tagWrap.addEventListener("click", removeTag);

    const tagTitle = document.createElement("p");
    tagTitle.textContent = tag;

    tagWrap.appendChild(tagTitle);

    return tagWrap
};

const appendTag = (parentId, referenceId, newNode) => {
    const parentElement = document.querySelector(`#${parentId}`);
    const referenceElement = document.querySelector(`#${referenceId}`);
    parentElement.insertBefore(newNode,referenceElement );
};

const clearTextContent = targetId => {
    const target = document.querySelector(`#${targetId}`);
    target.value = '';
};

const addTag = e => {
    const {keyCode, target} = e;
    const {value: tagText} = target;

    if (keyCode == 32 && tagIsEmpty(tagText)) {
        appendTag("llll", "tag-list", makeTag("#"+tagText));
        clearTextContent("tag");
        taglist.push(tagText);
        
    }
    if (keyCode == 16 && taglist.length!=0) {
        for(i=1;i<=taglist.length;i++){
            localStorage.setItem(i,taglist[i-1]);
        }
        localStorage.setItem("taglistsize",taglist.length);

        
        //배열 초기화
        taglist=[];
        //여기서 입력한 값 가져오기
        // alert(tagText);
    }
};

const getTag = e => {
    const {keyCode, target} = e;
    const {value: tagText} = target;

    
};

const removeTag = e => {
    e.currentTarget.remove();
};

const tagInput = document.querySelector("#tag");
tagInput.addEventListener("keyup", addTag);


