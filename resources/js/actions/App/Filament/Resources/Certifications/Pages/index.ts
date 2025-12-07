import ListCertifications from './ListCertifications'
import CreateCertification from './CreateCertification'
import EditCertification from './EditCertification'

const Pages = {
    ListCertifications: Object.assign(ListCertifications, ListCertifications),
    CreateCertification: Object.assign(CreateCertification, CreateCertification),
    EditCertification: Object.assign(EditCertification, EditCertification),
}

export default Pages